<?php
/**
 * @author    AlloVince
 * @copyright Copyright (c) 2015 EvaEngine Team (https://github.com/EvaEngine)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Eva\EvaOAuth\OAuth2;

interface ResourceServerInterface
{
    const METHOD_GET = 'GET';

    const METHOD_POST = 'POST';

    const FORMAT_HTML = 'html';

    const FORMAT_XML = 'xml';

    const FORMAT_JSON = 'json';

    const FORMAT_JSONP = 'jsonp';

    public function getAccessTokenFormat();

    public function getAccessTokenMethod();

    public function getAccessTokenUrl();
}
