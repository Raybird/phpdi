<?php
namespace Raybird\TryDi\Annotation;

class InjectClass {

    private $user;

    /**
     * @Inject("param.data")
     */
    private $data;

    /**
     *
     * @Inject({"param.user"})
     */
    public function __construct($user){
        $this->user = $user;
    }

}