<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Methods;

use Illuminate\Console\Command;
use Smartprax\Medidoc\Entities\ContentResponse;
use Smartprax\Medidoc\Enums\ContentFormatEnum;
use Smartprax\Medidoc\Facades\Medidoc;

/**
 * @method static ContentResponse run(string $medidocDocumentGID, ?bool $contentAsPdf = false)
 */
class GetDocumentContent extends MedidocMethod
{
    public function handle(string $medidocDocumentGID, ?bool $contentAsPdf = false): ContentResponse
    {
        $response = Medidoc::call($this, \compact('medidocDocumentGID', 'contentAsPdf'))
            ->GetDocumentContentResult;

        return new ContentResponse(
            FolderGID: $response->FolderGID,
            DocumentGID: $response->DocumentGID,
            DocumentContent: \base64_decode($response->DocumentContent),
            FileType: ContentFormatEnum::from($response->FileType)
        );
    }

    public function getCommandSignature(): string
    {
        return parent::getCommandSignature() . ' {medidocDocumentGID} {--contentAsPdf=false}';
    }

    public function asCommand(Command $command)
    {

        $response = $this->handle($command->argument('medidocDocumentGID'), \boolval($command->option('contentAsPdf')));

        if (\boolval($command->option('contentAsPdf'))) {

            $command->info('Operation successful.');

        } else {
            $document = new \DOMDocument();
            $document->formatOutput = true;
            $document->loadXML($response->DocumentContent);

            $command->info($document->saveXML());
        }
    }

}
