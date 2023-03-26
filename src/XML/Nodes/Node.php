<?php

namespace Smartprax\Medidoc\XML\Nodes;

use Illuminate\Support\Str;
use ReflectionClass;
use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use Smartprax\Medidoc\XML\XML_NS;

class Node implements XmlSerializable
{
    protected null|string|array $value = null;
    protected array $attributes = [];
    protected array $children = [];

    protected ?string $name = null;

    /**
     * @param ...$args mixed name, attributes, value
     * @return static
     */
    public static function create(...$args) : static
    {
        // Get constructor parameter count of (child) class.
        $reflection = new ReflectionClass(static::class);
        $params = $reflection->getConstructor()?->getParameters() ?? [];

        // Pass the parameters to the (child) class constructor.
        $instance = new static(...\array_slice($args, 0, \count($params)));

        // Set props if passed by name.
        $instance->name = $args['name'] ?? null;
        $instance->attributes = $args['attributes'] ?? [];
        $instance->value = $args['value'] ?? [];

        return $instance;
    }

    public function namespace() : ?XML_NS
    {
        return null;
    }

    public function name() : string
    {
        return $this->name ?? Str::of(get_class($this))
            ->replace('\\', '/')
            ->basename();
    }

    public function value(): array|string|null
    {
        return $this->value;
    }

    public function addChild(Node $child): static
    {
        $this->children[] = $child;

        return $this;
    }

    public function attributes(): array
    {
        return $this->attributes;
    }

    public function xmlSerialize(Writer $writer): void
    {
        $writer->write([
            'name' => $this->namespace() ? $this->namespace()->clark($this->name()) : $this->name(),
            'attributes' => $this->attributes(),
            'value' => match (true) {
                \is_array($this->value()) => \array_filter([
                    ...$this->value(),
                    ...$this->children,
                ]),
                default => $this->value(),
            },
        ]);
    }

    public function __toString(): string
    {
        $writer = new Writer();
        $writer->write($this);

        return $writer->outputMemory();
    }

}
