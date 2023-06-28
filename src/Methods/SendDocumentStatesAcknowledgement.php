<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Methods;

use Illuminate\Console\Command;
use Smartprax\Medidoc\Facades\Medidoc;

/**
 * @see http://api.medidoc.ch/methods/senddocumentstatesacknowledgement/
 *
 * @method static bool run(string $token)
 */
class SendDocumentStatesAcknowledgement extends MedidocMethod
{
    public function handle(string $token): bool
    {
        return Medidoc::call($this, \compact('token'))
            ->SendDocumentStatesAcknowledgementResult
            ->ReturnStatus === 1;
    }

    public function getCommandSignature(): string
    {
        return parent::getCommandSignature()  . ' {document_gid}';
    }

    public function asCommand(Command $command)
    {
        if ($this->handle($command->argument('document_gid'))) {
            $command->info('Document acknowledged');
        } else {
            $command->error('Soemthing went wrong.');
        }
    }
}
