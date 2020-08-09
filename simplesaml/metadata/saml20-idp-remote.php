<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

$metadata['https://idp.lndo.site/simplesaml/saml2/idp/metadata.php'] = array (
    'metadata-set' => 'saml20-idp-remote',
    'entityid' => 'https://idp.lndo.site/simplesaml/saml2/idp/metadata.php',
    'SingleSignOnService' => 
    array (
      0 => 
      array (
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        'Location' => 'https://idp.lndo.site/simplesaml/saml2/idp/SSOService.php',
      ),
    ),
    'SingleLogoutService' => 
    array (
      0 => 
      array (
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        'Location' => 'https://idp.lndo.site/simplesaml/saml2/idp/SingleLogoutService.php',
      ),
    ),
    'certData' => 'MIIExjCCAy6gAwIBAgIJAO9WeuC2wj9YMA0GCSqGSIb3DQEBCwUAMHgxCzAJBgNVBAYTAkFVMREwDwYDVQQIDAhWaWN0b3JpYTESMBAGA1UEBwwJTWVsYm91cm5lMQswCQYDVQQKDAJNZTELMAkGA1UECwwCTWUxCzAJBgNVBAMMAk1lMRswGQYJKoZIhvcNAQkBFgxtZUBnbWFpbC5jb20wHhcNMjAwODA4MTE0MTU3WhcNMzAwODA4MTE0MTU3WjB4MQswCQYDVQQGEwJBVTERMA8GA1UECAwIVmljdG9yaWExEjAQBgNVBAcMCU1lbGJvdXJuZTELMAkGA1UECgwCTWUxCzAJBgNVBAsMAk1lMQswCQYDVQQDDAJNZTEbMBkGCSqGSIb3DQEJARYMbWVAZ21haWwuY29tMIIBojANBgkqhkiG9w0BAQEFAAOCAY8AMIIBigKCAYEA6YTN6jtP7n7mEBPu9Ht3JM7jQ3Cqp13HQWbr1sfXITf6AbkB/xTKkl14WL02WjwhbwwfWRHi3/3DEcWA2nZyidvia793yU9wxfmw3S8JF6PntodaDKQKtPUwq/sxmZODknD8kicnhLzxh96fLdZo07KJ35wnKf+2hBKTyDByEXD1A/ybYT3RWpY7NC56+NOF7euMbwDdPiOgARQ+Yvs9pFDPIFSnDHuIdzNS5e43sAydwD4RemXltoE7/NG1QOl1zQ85v3hzpEmIXlRJXZGcPRGBepBToU8o2IZlqjP7wlEvEmZyAmtn7uaxiRrkaDtAu+/kgpTNtD/VKoiUQrtVRCW/KxtqE+1jF0H/E86+iatH+YyyM54uP4cO/t/nYw9xbYxF9K+uDiZdkCoZwFw66PvLZpc6kQO4OrakNmd5qn0LnYZMjQo1A00k6DKDXk78I3IDZgWv/Azj1M/YdQ3qKL7uJd47en6+1jXV5lNUXl0l4iCyZIlphY2G/I9XygjLAgMBAAGjUzBRMB0GA1UdDgQWBBRqKJDiKshKUQUeOB96fKKFpBTxmTAfBgNVHSMEGDAWgBRqKJDiKshKUQUeOB96fKKFpBTxmTAPBgNVHRMBAf8EBTADAQH/MA0GCSqGSIb3DQEBCwUAA4IBgQBwQA+3B41Q1YbZq/XUKGCPdB3rlP91xuaAJ0BDItnOSHoVgH9WdWIXIFGUvtwXWENTaiU3XVExGPV0VKBYaogMVtQHzbGgrUVrICK8cwZFRoWddChXUrIVTSgBGyHpJQMZZJSKZBnet0/vW/WlgxM4OWTzqryM7gQ3zYK7VbX78p4sBKyWifWUH3PP1ifSntN72HGuAGyPx0EuSnRgBFVUg/UZvTP7wTqObxL0tralMnS5ry4Cyqw3jKnIb+LKk7IQHQRvS3QTyJIiMVJw1ye8yDlNfiyY58DMyTodEEi84GrtYIfvAAq5GVd3SNTHlh4uIG0dhQDSTgZpDw8gnTRmkNwU2PDZpKqGUBHqtW5zMZYn/8ti6gKY5o7s+RNyoL+rCyDAWDMcl9PA/pa8tnnZkinaWqVRlHwk534OZkZ7NqEcYpYRDFW0Pq78Ng3x+2ag+mARo25uNZBz6o3BOl7VizMMV/jBc+C1n34XzjBgexnUyIMgN5Xsd6sXexTTSKs=',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  );