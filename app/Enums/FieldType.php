<?php

declare(strict_types=1);

namespace App\Enums;

enum FieldType: string
{
    case TEXT = 'text';
    case TEXT_AREA = 'textarea';
    case SELECT = 'select';
    // need a select with other option
    case CHECKBOX = 'checkbox';
    case RADIOS = 'radios';
    // grouped radios

    // grouped
    //order list
}
