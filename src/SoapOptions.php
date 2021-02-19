<?php

namespace Onurkacmaz\Soap;

define("V1", 1);
define("V2", 2);

class SoapOptions
{

    public int $version = V1;
    public null|string $login = null;
    public null|string $password = null;
    public null|string $proxyHost = null;
    public null|int $proxyPort = null;
    public null|string $proxyLogin = null;
    public null|string $proxyPassword = null;
    public null|string $encoding = "ISO-8859-1";

    public function toArray(): array {
        return [
            "soap_version" => $this->getVersion(),
            "login" => $this->getLogin(),
            "password" => $this->getPassword(),
            "proxy_host" => $this->getProxyHost(),
            "proxy_port" => $this->getProxyPort(),
            "proxy_login" => $this->getProxyLogin(),
            "proxy_password" => $this->getProxyPassword(),
            "encoding" => $this->getEncoding()
        ];
    }

    /**
     * @return int
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * @param int $version
     */
    public function setVersion(int $version): void
    {
        $this->version = $version;
    }

    /**
     * @return string|null
     */
    public function getLogin(): ?string
    {
        return $this->login;
    }

    /**
     * @param string|null $login
     */
    public function setLogin(?string $login): void
    {
        $this->login = $login;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string|null
     */
    public function getProxyHost(): ?string
    {
        return $this->proxyHost;
    }

    /**
     * @param string|null $proxyHost
     */
    public function setProxyHost(?string $proxyHost): void
    {
        $this->proxyHost = $proxyHost;
    }

    /**
     * @return int|null
     */
    public function getProxyPort(): ?int
    {
        return $this->proxyPort;
    }

    /**
     * @param int|null $proxyPort
     */
    public function setProxyPort(?int $proxyPort): void
    {
        $this->proxyPort = $proxyPort;
    }

    /**
     * @return string|null
     */
    public function getProxyLogin(): ?string
    {
        return $this->proxyLogin;
    }

    /**
     * @param string|null $proxyLogin
     */
    public function setProxyLogin(?string $proxyLogin): void
    {
        $this->proxyLogin = $proxyLogin;
    }

    /**
     * @return string|null
     */
    public function getProxyPassword(): ?string
    {
        return $this->proxyPassword;
    }

    /**
     * @param string|null $proxyPassword
     */
    public function setProxyPassword(?string $proxyPassword): void
    {
        $this->proxyPassword = $proxyPassword;
    }

    /**
     * @return string|null
     */
    public function getEncoding(): ?string
    {
        return $this->encoding;
    }

    /**
     * @param string|null $encoding
     */
    public function setEncoding(?string $encoding): void
    {
        $this->encoding = $encoding;
    }

}