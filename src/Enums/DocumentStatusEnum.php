<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Enums;

enum DocumentStatusEnum: int
{
    case Unknown = 0;
    case New = 1;
    case InvitationSent = 3;
    case ShowedToPatient = 4;
    case TPForwarded = 7;
    case TPForwardedWithResponse = 8;
    case TGForwarded = 11;
    case TGForwardedWithResponse = 12;
    case PrintServiceRequested = 13;
    case InvoicePaidByESR = 17;
    case InvoicePaidByPatient = 18;
    case InvoicePaidByInsurance = 19;
    case Done = 20;
    case Cancelled = 21;
    case WaitingForClientAction = 22;
    case PatientChangedInsurance = 23;
    case InsuranceProcessing = 24;
    case ReminderSent = 40;
    case InternalCollectionNecessary = 45;
    case ExternalCollectionStarted = 46;
    case ExternalCollectionSuccessfull = 47;
    case ExternalCollectionFailed = 48;
    case TPConvertedToTG = 65;
    case TGConvertedToTP = 66;
    case NotificationEmailSent = 70;
    case NotificationEmailNotSent = 71;
    case PrescriptionProcessed = 80;
    case ForwardedToTrustCenter = 81;
    case PrintServiceRequestedExecuted = 91;
    case PrintServiceRequestedCopyExecuted = 92;
    case ContentFormatError = 200;
    case ResponseFormatError = 201;
    case InvitationError = 300;
    case ConversionError = 500;
    case ForwardingError = 600;
    case ProviderProcessingError = 700;
    case PrintServiceError = 900;
    case UnexpectedError = 9999;
}
