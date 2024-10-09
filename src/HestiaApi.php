<?php

namespace Estratos\HestiaApi;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class HestiaAPI extends AbstractBundle
{

    private $admin = 'admin';
    private $username;
    private $password;
    private $hostname;
    private $port = '8083';



    public function __construct($username = "user", $password = "ownerpass")
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function listDomains($username = "user", $domain, $format = 'json')
    {
        // Server credentials
        $hst_hostname = $this->hostname;
        $hst_port = '8083';
        $hst_returncode = 'no';
        $hst_username = 'admin';
        $hst_password = 'p4ssw0rd';
        $hst_command = 'v-list-web-domain';

        // Account
        //$username = 'demo';
        //$domain = 'demo.hestiacp.com';
        //$format = 'json';

        // Prepare POST query
        $postvars = array(
            'user' => $hst_username,
            'password' => $hst_password,
            'returncode' => $hst_returncode,
            'cmd' => $hst_command,
            'arg1' => $username,
            'arg2' => $domain,
            'arg3' => $format
        );

        $answer = $this->request($postvars);

        // Parse JSON output
        $data = json_decode($answer, true);


        return $data;
    }

    public function addDomain($domain)
    {

        // Server credentials
        $hst_hostname = $this->hostname;;
        $hst_port = $this->port;
        $hst_username = $this->admin;
        $hst_password = $this->password;
        $hst_returncode = 'yes';
        $hst_command = 'v-add-domain';

        // Domain details
        $username = $this->username;
        //$domain = 'demo.hestiacp.com';

        // Prepare POST query
        $postvars = array(
            'user' => $hst_username,
            'password' => $hst_password,
            'returncode' => $hst_returncode,
            'cmd' => $hst_command,
            'arg1' => $username,
            'arg2' => $domain
        );


        $answer = $this->request($postvars);

        // Check result
        if ($answer === 0) {
            return "Domain has been successfuly created\n";
        } else {
            return "Query returned error code: " . $answer . "\n";
        }
    }

    ///// DNS RECORD

    public function addDnsRecord($username, $domain, $type, $value)
    {
        /// 
        $hst_command = 'v-add-dns-record';
        $hst_returncode = 'no';

        // Prepare POST query
        $postvars = array(
            'user' => $this->admin,
            'password' => $this->password,
            'returncode' => $hst_returncode,
            'cmd' => $hst_command,
            'arg1' => $username,
            'arg2' => $domain,
            'arg3' => $type,
            'arg4' => $value,

        );

        $answer = $this->request($postvars);

        return $answer;
    }

    public function request($postvars)
    {
        // Send POST query via cURL
        $postdata = http_build_query($postvars);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://' . $this->hostname . ':' . $this->port . '/api/');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
        $answer = curl_exec($curl);

        return $answer;
    }

    /**
     * Set the value of hostname
     *
     * @return  self
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;

        return $this;
    }
}
