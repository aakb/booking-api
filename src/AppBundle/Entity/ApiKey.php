<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApiKey
 *
 * @ORM\Table(name="api_key")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ApiKeyRepository")
 */
class ApiKey {
  /**
   * @var int
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @var string
   *
   * @ORM\Column(name="apiKey", type="string", length=255, unique=true)
   */
  private $apiKey;

  /**
   * @var string
   *
   * @ORM\Column(name="title", type="string", length=255, unique=true)
   */
  private $title;

  /**
   * @var string
   *
   * @ORM\Column(name="callbackUrl", type="string", length=255, nullable=true)
   */
  private $callbackUrl;

  /**
   * @var array
   *
   * @ORM\Column(name="resources", type="simple_array")
   */
  private $resources;


  /**
   * Get id
   *
   * @return int
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Set apiKey
   *
   * @param string $apiKey
   *
   * @return ApiKey
   */
  public function setApiKey($apiKey) {
    $this->apiKey = $apiKey;

    return $this;
  }

  /**
   * Get apiKey
   *
   * @return string
   */
  public function getApiKey() {
    if (!isset($this->apiKey)) {
      $this->apiKey = uniqid("", TRUE);
    }
    return $this->apiKey;
  }

  /**
   * Set title
   *
   * @param string $title
   *
   * @return ApiKey
   */
  public function setTitle($title) {
    $this->title = $title;

    return $this;
  }

  /**
   * Get title
   *
   * @return string
   */
  public function getTitle() {
    return $this->title;
  }

  /**
   * Set callbackUrl
   *
   * @param string $callbackUrl
   *
   * @return ApiKey
   */
  public function setCallbackUrl($callbackUrl) {
    $this->callbackUrl = $callbackUrl;

    return $this;
  }

  /**
   * Get callbackUrl
   *
   * @return string
   */
  public function getCallbackUrl() {
    return $this->callbackUrl;
  }

  /**
   * Set resources
   *
   * @param array $resources
   *
   * @return ApiKey
   */
  public function setResources($resources) {
    $this->resources = $resources;

    return $this;
  }

  /**
   * Get resources
   *
   * @return array
   */
  public function getResources() {
    return $this->resources;
  }
}

