# frankerfacez

Example usage:
```php
<?php

$client = new \Back1ng\FrankerFacez\Client();

$emotes = new \Back1ng\FrankerFacez\Emotes\Emotes();

$params = new \Back1ng\FrankerFacez\Emotes\EmotesParams();
$params->setQuery('peepoLeave');

$emotes->setParams($params);

$response = $client->sendGet($emotes);
```
