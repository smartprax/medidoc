<?php

namespace Smartprax\Medidoc\Enumerations;

enum ReturnStatusEnum: int
{
    case NotInitialized = 0;
    case OperationSuccessful = 1;
    case GenericError = 100;
    case MissingParameters = 101;
    case EanNotAuthorized = 102;
    case CannotUploadFile = 103;
    case DocumentNotFound = 104;
    case CannotRetrieveTheStatus = 105;
    case MissingReceiverPatientData = 106;
    case NoPendingDocumentFound = 107;
    case FolderNotFound = 108;
    case TokenNotFound = 109;
    case PrintServiceNotEnabled = 110;
    case InsuranceNotChangedByThePatient = 111;
    case FeatureWillBeImplementedLater = 112;
    case DuplicateInvoice = 113;
    case ContentNotAvailable = 114;
}