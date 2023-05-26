<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;

return Config::create()
    ->setEngine($engine = DefaultEngineFactory::create(
        ExtSoapOptions::defaults('https://ebill-ki.postfinance.ch/B2BService/B2BService.svc?wsdl', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('src/Client//Type')
    ->setTypeNamespace('https://ebill-ki.postfinance.ch/B2BService/B2BService.svc\Type')
    ->setClientDestination('src/Client/')
    ->setClientName('PostfinanceClient')
    ->setClientNamespace('https:\\\\ebill-ki.postfinance.ch\\B2BService\\B2BService.svc')
    ->setClassMapDestination('src/Client/')
    ->setClassMapName('PostfinanceClassmap')
    ->setClassMapNamespace('https:\\\\ebill-ki.postfinance.ch\\B2BService\\B2BService.svc')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler(
        new Assembler\ImmutableSetterAssemblerOptions()
    )))
    ->addRule(
        new Rules\IsRequestRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler(new Assembler\ConstructorAssemblerOptions())),
            ])
        )
    )
    ->addRule(
        new Rules\IsResultRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
            ])
        )
    );
