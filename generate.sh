# get the latest wsdltophp.phar
if [ ! -f wsdltophp.phar ]; then
    echo "Download wsdltophp.phar once";
    wget https://phar.wsdltophp.com/wsdltophp.phar;
fi

# get current folder
DEST=`pwd`;

# clean current folder
rm -rf  $DEST/src/ \
        $DEST/tutorial.php \
        $DEST/composer.json \
        $DEST/composer.lock;

# package informations
php wsdltophp.phar generate:package \
    --urlorpath="https://ws.colissimo.fr/sls-ws/SlsServiceWS?wsdl" \
    --destination=$DEST \
    --composer-name="wsdltophp/package-colissimo-postage" \
    --composer-settings="type:library" \
    --composer-settings="license:MIT" \
    --composer-settings="authors.0.name:Mikael DELSOL" \
    --composer-settings="authors.0.email:contact@wsdltophp.com" \
    --composer-settings="authors.0.homepage:https://www.wsdltophp.com" \
    --composer-settings="authors.0.role:owner" \
    --composer-settings="authors.1.name:Maxime Veber" \
    --composer-settings="authors.1.email:nek.dev@gmail.com" \
    --composer-settings="authors.1.role:Contributor" \
    --composer-settings="autoload.psr-4.SoapClient\:./SoapClient/" \
    --composer-settings="require.require-dev.phpstan/phpstan:^1.4" \
    --composer-settings="scripts.phpstan:vendor/bin/phpstan analyze src --level=3" \
    --addcomments="author:WsdlToPhp <contact@wsdltophp.com>" \
    --soapclient="SoapClient\SoapClientBase" \
    --namespace="ColissimoPostage";

# generate package
php wsdltophp.phar generate:package \
    --urlorpath="https://ws.colissimo.fr/sls-ws/SlsServiceWS?wsdl" \
    --destination=$DEST \
    --composer-name="wsdltophp/package-colissimo-postage" \
    --composer-settings="type:library" \
    --composer-settings="license:MIT" \
    --composer-settings="authors.0.name:Mikael DELSOL" \
    --composer-settings="authors.0.email:contact@wsdltophp.com" \
    --composer-settings="authors.0.homepage:https://www.wsdltophp.com" \
    --composer-settings="authors.0.role:owner" \
    --composer-settings="authors.1.name:Maxime Veber" \
    --composer-settings="authors.1.email:nek.dev@gmail.com" \
    --composer-settings="authors.1.role:Contributor" \
    --composer-settings="autoload.psr-4.SoapClient\:./SoapClient/" \
    --composer-settings="require-dev.phpstan/phpstan:^1.4" \
    --composer-settings="scripts.phpstan:vendor/bin/phpstan analyze src --level=3" \
    --addcomments="author:WsdlToPhp <contact@wsdltophp.com>" \
    --soapclient="SoapClient\SoapClientBase" \
    --namespace="ColissimoPostage" \
    --force;
