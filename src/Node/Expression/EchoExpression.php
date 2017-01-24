<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace PhpParser\Node\Expression;


use PhpParser\Node\Expression;
use PhpParser\Token;

class EchoExpression extends Expression {

    /** @var Token */
    public $echoKeyword;

    /** @var Expression[] */
    public $expressions;

}