<?php

namespace melon\RefappBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



class EnvoyerMail
{
private $email;

public function setEmail($email) {
	$this->email = $email;

	return $this;
}

public function getEmail() {
	return $this->email;
}
}