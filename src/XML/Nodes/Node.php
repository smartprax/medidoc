<?php

namespace Smartprax\Medidoc\XML\Nodes;

use Illuminate\Support\Str;
use ReflectionClass;
use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;
use Smartprax\Medidoc\XML\MedidocXML;
use Smartprax\Medidoc\XML\XML_NS;

class Node implements XmlSerializable
{
    protected null|string|array|Node $value = null;
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

        // Pass the unpacked parameters to the (child) class constructor.
        $instance = new static(...\array_slice($args, 0, \count($params)));

        // Set props if passed by name.
        $instance->name = $args['name'] ?? null;
        $instance->attributes = $args['attributes'] ?? [];
        $instance->value = $args['value'] ?? [];

        return $instance;
    }

    public static function namespace() : ?XML_NS
    {
        return null;
    }

    public function name() : string
    {
        return $this->name ??
            Str::of(get_class($this))
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
        $name = $this->name();
        $namespace = $this->namespace();
        $value = $this->value();

        $writer->write([
            'name' => $namespace ? $namespace->clark($name) : $name,
            'attributes' => $this->attributes(),
            'value' => \is_array($value) ?
                \array_filter([
                    ...$value,
                    ...$this->children,
                ]) :
                $value,
        ]);
    }

    public function xml(): string
    {
        $writer = MedidocXML::writer();

        if (static::namespace()) {
            $writer->namespaceMap[static::namespace()->value] = static::namespace()->name;
        }

        $writer->write($this);

        return $writer->outputMemory();
    }

    public function __toString()
    {
        return $this->xml();
    }

}
