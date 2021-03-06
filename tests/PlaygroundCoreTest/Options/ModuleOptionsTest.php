<?php

namespace PlaygroundCoreTest\Options;

use PlaygroundCoreTest\Bootstrap;

class ModuleOptionsTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->sm = Bootstrap::getServiceManager();
    }
    
    public function testSetAndGetDefaultShareMessage()
    {
        $optionsTest = $this->sm->get('playgroundcore_module_options');
        $testMessage = 'Ceci est mon message';
        
        $retour = $optionsTest->setDefaultShareMessage($testMessage);
        $this->assertInstanceOf('PlaygroundCore\Options\ModuleOptions', $retour);
        
        $retour = $optionsTest->getDefaultShareMessage();
        $this->assertInternalType(gettype($testMessage), $retour);
        $this->assertEquals($testMessage, $retour); 
    }
    
    public function testSetAndGetAdServing()
    {
        $optionsTest = $this->sm->get('playgroundcore_module_options');
        $testAdServing = array();
    
        $retour = $optionsTest->setAdServing($testAdServing);
        $this->assertInstanceOf('PlaygroundCore\Options\ModuleOptions', $retour);
    
        $retour = $optionsTest->getAdServing();
        $this->assertInternalType(gettype($testAdServing), $retour);
        $this->assertEquals($testAdServing, $retour);
    }
    
    public function testSetAndGetGoogleAnalytics()
    {
        $optionsTest = $this->sm->get('playgroundcore_module_options');
        $testGA = array('id' => '');
    
        $retour = $optionsTest->setGoogleAnalytics($testGA);
        $this->assertInstanceOf('PlaygroundCore\Options\ModuleOptions', $retour);
    
        $retour = $optionsTest->getGoogleAnalytics();
        $this->assertInternalType(gettype($testGA), $retour);
        $this->assertEquals($testGA, $retour);
    }
    
    public function testSetAndGetFacebookOpenGraph()
    {
        $optionsTest = $this->sm->get('playgroundcore_module_options');
        $testFBOpenGraph = array('appId' => '');
    
        $retour = $optionsTest->setFacebookOpengraph($testFBOpenGraph);
        $this->assertInstanceOf('PlaygroundCore\Options\ModuleOptions', $retour);
    
        $retour = $optionsTest->getFacebookOpengraph();
        $this->assertInternalType(gettype($testFBOpenGraph), $retour);
        $this->assertEquals($testFBOpenGraph, $retour);
    }
    
    public function testSetAndGetQuConfig()
    {
        $optionsTest = $this->sm->get('playgroundcore_module_options');
        $testQuConfig = array();
    
        $retour = $optionsTest->setQuConfig($testQuConfig);
        $this->assertInstanceOf('PlaygroundCore\Options\ModuleOptions', $retour);
    
        $retour = $optionsTest->getQuConfig();
        $this->assertInternalType(gettype($testQuConfig), $retour);
        $this->assertEquals($testQuConfig, $retour);
    }
    
    public function testSetAndGetCKEditor()
    {
        $optionsTest = $this->sm->get('playgroundcore_module_options');
        $testCKEditor = array();
    
        $retour = $optionsTest->setCkeditor($testCKEditor);
        $this->assertInstanceOf('PlaygroundCore\Options\ModuleOptions', $retour);
    
        $retour = $optionsTest->getCkeditor();
        $this->assertInternalType(gettype($testCKEditor), $retour);
        $this->assertEquals($testCKEditor, $retour);
    }
    
    public function testSetAndGetTransportClass()
    {
        $optionsTest = $this->sm->get('playgroundcore_module_options');
        $testTransportClass = 'Zend\Mail\Transport\File';
    
        $retour = $optionsTest->setTransportClass($testTransportClass);
        $this->assertInstanceOf('PlaygroundCore\Options\ModuleOptions', $retour);
    
        $retour = $optionsTest->getTransportClass();
        $this->assertInternalType(gettype($testTransportClass), $retour);
        $this->assertEquals($testTransportClass, $retour);
    }
    
    public function testSetAndGetOptionsClass()
    {
        $optionsTest = $this->sm->get('playgroundcore_module_options');
        $testOptionsClass = 'Zend\Mail\Transport\FileOptions';
    
        $retour = $optionsTest->setOptionsClass($testOptionsClass);
        $this->assertInstanceOf('PlaygroundCore\Options\ModuleOptions', $retour);
    
        $retour = $optionsTest->getOptionsClass();
        $this->assertInternalType(gettype($testOptionsClass), $retour);
        $this->assertEquals($testOptionsClass, $retour);
    }
    
    public function testSetAndGetOptions()
    {
        $optionsTest = $this->sm->get('playgroundcore_module_options');
        $testOptions = array('path' => 'data/mail/');
    
        $retour = $optionsTest->setOptions($testOptions);
        $this->assertInstanceOf('PlaygroundCore\Options\ModuleOptions', $retour);
    
        $retour = $optionsTest->getOptions();
        $this->assertInternalType(gettype($testOptions), $retour);
        $this->assertEquals($testOptions, $retour);
    }
    
    public function testSetAndGetBitlyUsername()
    {
        $optionsTest = $this->sm->get('playgroundcore_module_options');
        $testBitlyUsername = 'Username';
    
        $retour = $optionsTest->setBitlyUsername($testBitlyUsername);
        $this->assertInstanceOf('PlaygroundCore\Options\ModuleOptions', $retour);
    
        $retour = $optionsTest->getBitlyUsername();
        $this->assertInternalType(gettype($testBitlyUsername), $retour);
        $this->assertEquals($testBitlyUsername, $retour);
    }
    
    public function testSetAndGetBitlyApiKey()
    {
        $optionsTest = $this->sm->get('playgroundcore_module_options');
        $testBitlyApiKey = 'ApiKey';
    
        $retour = $optionsTest->setBitlyApiKey($testBitlyApiKey);
        $this->assertInstanceOf('PlaygroundCore\Options\ModuleOptions', $retour);
    
        $retour = $optionsTest->getBitlyApiKey();
        $this->assertInternalType(gettype($testBitlyApiKey), $retour);
        $this->assertEquals($testBitlyApiKey, $retour);
    }
    
    public function testSetAndGetBitlyUrl()
    {
        $optionsTest = $this->sm->get('playgroundcore_module_options');
        $testBitlyUrl = 'Bit.ly';
    
        $retour = $optionsTest->setBitlyUrl($testBitlyUrl);
        $this->assertInstanceOf('PlaygroundCore\Options\ModuleOptions', $retour);
    
        $retour = $optionsTest->getBitlyUrl();
        $this->assertInternalType(gettype($testBitlyUrl), $retour);
        $this->assertEquals($testBitlyUrl, $retour);
    }
    
    public function testSetAndGetLocale()
    {
        $optionsTest = $this->sm->get('playgroundcore_module_options');
        $testLocale = 'France';
    
        $retour = $optionsTest->setLocale($testLocale);
        $this->assertInstanceOf('PlaygroundCore\Options\ModuleOptions', $retour);
    
        $retour = $optionsTest->getLocale();
        $this->assertInternalType(gettype($testLocale), $retour);
        $this->assertEquals($testLocale, $retour);
    }
}