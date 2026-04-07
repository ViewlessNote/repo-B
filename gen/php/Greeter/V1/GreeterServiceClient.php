<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Greeter\V1;

/**
 * GreeterService provides a simple greeting RPC.
 */
class GreeterServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Greeter\V1\GreetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Greet(\Greeter\V1\GreetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/greeter.v1.GreeterService/Greet',
        $argument,
        ['\Greeter\V1\GreetResponse', 'decode'],
        $metadata, $options);
    }

}
