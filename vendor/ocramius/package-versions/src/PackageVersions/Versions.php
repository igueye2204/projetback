<?php

declare(strict_types=1);

namespace PackageVersions;

use OutOfBoundsException;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'api-platform/core' => 'v2.5.7@37b5edf50cc05299b12cb8982be3efa035d726ce',
  'doctrine/annotations' => '1.11.1@ce77a7ba1770462cd705a91a151b6c3746f9c6ad',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.0.2@a3c6479858989e242a2465972b4f7a8642baf0d4',
  'doctrine/dbal' => '2.10.4@47433196b6390d14409a33885ee42b6208160643',
  'doctrine/doctrine-bundle' => '2.1.2@f5153089993e1230f5d8acbd8e126014d5a63e17',
  'doctrine/doctrine-migrations-bundle' => '3.0.1@96e730b0ffa0bb39c0f913c1966213f1674bf249',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.1@69eaf2ca5bc48357b43ddbdc31ccdffc0e2a0882',
  'doctrine/orm' => 'v2.7.3@d95e03ba660d50d785a9925f41927fef0ee553cf',
  'doctrine/persistence' => '2.0.0@1dee036f22cd5dc0bc12132f1d1c38415907be55',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'fig/link-util' => '1.1.1@c038ee75ca13663ddc2d1f185fe6f7533c00832a',
  'fzaninotto/faker' => 'v1.9.1@fc10d778e4b84d5bd315dad194661e091d307c6f',
  'jms/metadata' => '2.3.0@6eb35fce7142234946d58d13e1aa829e9b78b095',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.3.0@1940ccf30e058b2fd66f5a9d696f1b5e0027b082',
  'laminas/laminas-zendframework-bridge' => '1.1.0@4939c81f63a8a4968c108c440275c94955753b19',
  'lcobucci/jwt' => '3.3.3@c1123697f6a2ec29162b82f170dd4a491f524773',
  'lexik/jwt-authentication-bundle' => 'v2.9.0@2c3448975c5560f4a29ac6f3bfc1fb24673609c0',
  'maennchen/zipstream-php' => '2.1.0@c4c5803cc1f93df3d2448478ef79394a5981cc58',
  'markbaker/complex' => '1.5.0@c3131244e29c08d44fefb49e0dd35021e9e39dd2',
  'markbaker/matrix' => '1.2.1@182d44c3b2e3b063468f7481ae3ef71c69dc1409',
  'myclabs/php-enum' => '1.7.6@5f36467c7a87e20fbdc51e524fd8f9d1de80187c',
  'namshi/jose' => '7.2.3@89a24d7eb3040e285dd5925fcad992378b82bcff',
  'nelmio/cors-bundle' => '2.1.0@be4d5824caebc86da9e224e935e02e1201b3ea54',
  'nikic/php-parser' => 'v4.9.1@88e519766fc58bd46b8265561fb79b54e2e00b28',
  'ocramius/package-versions' => '1.9.0@94c9d42a466c57f91390cdd49c81313264f49d85',
  'ocramius/proxy-manager' => '2.8.1@371c8f2d9d1e888ce1f8f2137d9187252b07ee94',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.1@d870572532cd70bc3fab58f2e23ad423c8404c44',
  'phpdocumentor/type-resolver' => '1.3.0@e878a14a65245fbe78f8080eba03b47c3b705651',
  'phpoffice/phpspreadsheet' => '1.14.1@2383aad5689778470491581442aab38cec41bf1d',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'symfony/asset' => 'v5.1.5@2f07b5993f1607c1c489bac3e15a000c33668b4b',
  'symfony/cache' => 'v5.1.5@c31bdd71f30435baff03693e684469c7ecb3ca1a',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v5.1.5@22f961ddffdc81389670b2ca74a1cc0213761ec0',
  'symfony/console' => 'v5.1.5@186f395b256065ba9b890c0a4e48a91d598fa2cf',
  'symfony/dependency-injection' => 'v5.1.5@48d6890e12ce9cd8e68aaa4fb72010139312fd73',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/doctrine-bridge' => 'v5.1.5@31cb4cfe6b9452cc1916022e995a08de4005299a',
  'symfony/dotenv' => 'v5.1.5@42d2a18597f4c7cafc0e25b1ad6a1cbb4f2caf05',
  'symfony/error-handler' => 'v5.1.5@525636d4b84e06c6ca72d96b6856b5b169416e6a',
  'symfony/event-dispatcher' => 'v5.1.5@94871fc0a69c3c5da57764187724cdce0755899c',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/expression-language' => 'v5.1.5@6675d937852379a251017db6e5144dd57506fbbd',
  'symfony/filesystem' => 'v5.1.5@f7b9ed6142a34252d219801d9767dedbd711da1a',
  'symfony/finder' => 'v5.1.5@2b765f0cf6612b3636e738c0689b29aa63088d5d',
  'symfony/flex' => 'v1.9.3@1eab1e85f5eb66dac138d6240cc0ceffd6e3ae34',
  'symfony/form' => 'v5.1.5@236d88a28671f9b13860789eabe28e8c4c8bba86',
  'symfony/framework-bundle' => 'v5.1.5@0607ca3cb7b79461a2e6a7c5d05e5cd6d2c14015',
  'symfony/http-client' => 'v5.1.5@21c4372e9cd2305313f4d4792d7b9fa7c25ade53',
  'symfony/http-client-contracts' => 'v2.2.0@3a5d0fe7908daaa23e3dbf4cee3ba4bfbb19fdd3',
  'symfony/http-foundation' => 'v5.1.5@41a4647f12870e9d41d9a7d72ff0614a27208558',
  'symfony/http-kernel' => 'v5.1.5@3e32676e6cb5d2081c91a56783471ff8a7f7110b',
  'symfony/intl' => 'v5.1.5@b6886c43cc1ae3367c569c5a8d4182555dd694fb',
  'symfony/maker-bundle' => 'v1.21.1@da629093c7bf9abd9a6a0f232a43bbb1b88de68d',
  'symfony/mime' => 'v5.1.5@89a2c9b4cb7b5aa516cf55f5194c384f444c81dc',
  'symfony/options-resolver' => 'v5.1.5@9ff59517938f88d90b6e65311fef08faa640f681',
  'symfony/polyfill-intl-grapheme' => 'v1.18.1@b740103edbdcc39602239ee8860f0f45a8eb9aa5',
  'symfony/polyfill-intl-icu' => 'v1.18.1@4e45a6e39041a9cc78835b11abc47874ae302a55',
  'symfony/polyfill-intl-idn' => 'v1.18.1@5dcab1bc7146cf8c1beaa4502a3d9be344334251',
  'symfony/polyfill-intl-normalizer' => 'v1.18.1@37078a8dd4a2a1e9ab0231af7c6cb671b2ed5a7e',
  'symfony/polyfill-mbstring' => 'v1.18.1@a6977d63bf9a0ad4c65cd352709e230876f9904a',
  'symfony/polyfill-php73' => 'v1.18.1@fffa1a52a023e782cdcc221d781fe1ec8f87fcca',
  'symfony/polyfill-php80' => 'v1.18.1@d87d5766cbf48d72388a9f6b85f280c8ad51f981',
  'symfony/property-access' => 'v5.1.5@c2a95da4d3b88523d00903a3d04636717766d674',
  'symfony/property-info' => 'v5.1.5@a10524dfdadc418c2e4b52667be7d6421b7da26f',
  'symfony/routing' => 'v5.1.5@47b0218344cb6af25c93ca8ee1137fafbee5005d',
  'symfony/security-bundle' => 'v5.1.8@8921cdb1057f615b8340a352195f4a684c876893',
  'symfony/security-core' => 'v5.1.5@0b965da49ccf070764baa2a23bbb926036b6c6b2',
  'symfony/security-csrf' => 'v5.1.5@962323e4db4458d731d5006f14019a22a2f84b06',
  'symfony/security-guard' => 'v5.1.5@85c368be963e9f0df9e93d830f966fc0af531703',
  'symfony/security-http' => 'v5.1.5@7741021221548e2b5768ec0cf502c91b6c55b209',
  'symfony/serializer' => 'v5.1.8@20d3c6c58c41344a427488c0d2902bfbfbe17ddb',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v5.1.5@0f7c58cf81dbb5dd67d423a89d577524a2ec0323',
  'symfony/string' => 'v5.1.8@a97573e960303db71be0dd8fda9be3bca5e0feea',
  'symfony/translation-contracts' => 'v2.2.0@77ce1c3627c9f39643acd9af086631f842c50c4d',
  'symfony/twig-bridge' => 'v5.1.5@4534dbfd47745a924beaa6e7c9d5462993bbd0a5',
  'symfony/twig-bundle' => 'v5.1.5@8898ef8aea8fa48638e15ce00c7c6318ce570ce1',
  'symfony/validator' => 'v5.1.8@360acadab7edcdca9005c4ad3b535f9c20db62fb',
  'symfony/var-dumper' => 'v5.1.5@b43a3905262bcf97b2510f0621f859ca4f5287be',
  'symfony/var-exporter' => 'v5.1.5@eabaabfe1485ca955c5b53307eade15ccda57a15',
  'symfony/web-link' => 'v5.1.5@ba2554887e34e693e3888f23f83c72d5ce04bfb2',
  'symfony/yaml' => 'v5.1.5@a44bd3a91bfbf8db12367fa6ffac9c3eb1a8804a',
  'twig/twig' => 'v3.0.5@9b76b1535483cdf4edf01bb787b0217b62bd68a5',
  'vich/uploader-bundle' => '1.15.0@07658fb47429d7e108fa43d8c74ca8cd7edaa0d9',
  'webimpress/safe-writer' => '2.1.0@5cfafdec5873c389036f14bf832a5efc9390dcdd',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'willdurand/negotiation' => 'v2.3.1@03436ededa67c6e83b9b12defac15384cb399dc9',
  'yectep/phpspreadsheet-bundle' => 'v0.1.1@85bcea7b06e77d15a459233b27aebd0d74fb4a65',
  'doctrine/data-fixtures' => '1.4.4@16a03fadb5473f49aad70384002dfd5012fe680e',
  'doctrine/doctrine-fixtures-bundle' => '3.4.0@870189619a7770f468ffb0b80925302e065a3b34',
  'symfony/browser-kit' => 'v5.1.5@b9545e08790be2d3d7d92306e339bbcd79f461e4',
  'symfony/css-selector' => 'v5.1.5@e544e24472d4c97b2d11ade7caacd446727c6bf9',
  'symfony/dom-crawler' => 'v5.1.5@3ac31ffbc596e41ca081037b7d78fc7a853c0315',
  'symfony/phpunit-bridge' => 'v5.1.5@e7d37c91486a0f9eed58a8c23822e1870ea36db5',
  'paragonie/random_compat' => '2.*@',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php72' => '*@',
  'symfony/polyfill-php71' => '*@',
  'symfony/polyfill-php70' => '*@',
  'symfony/polyfill-php56' => '*@',
  '__root__' => 'No version set (parsed as 1.0.0)@',
);

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
