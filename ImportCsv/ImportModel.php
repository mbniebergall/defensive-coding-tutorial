<?php

namespace ImportCsv;

class ImportModel
{
    protected $uuid;
    protected $firstName;
    protected $lastName;
    protected $phone;
    protected $street;
    protected $postalCode;
    protected $region;
    protected $someDate;
    protected $email;
    protected $ip;
    protected $hexColor;
    protected $number;
    protected $float;
    protected $digit;
    protected $bool;
    protected $country;
    protected $date;

    /**
     * Gets the uuid
     *
     * @return mixed
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Sets the uuid
     *
     * @param mixed $uuid value to set
     *
     * @return self
     *
     * @throws InvalidDataException
     */
    public function setUuid($uuid) : ImportModel
    {
        if (!preg_match('/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/', $uuid)) {
            throw new InvalidDataException('Invalid UUID: ' . $uuid);
        }
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * Gets the firstName
     *
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets the firstName
     *
     * @param mixed $firstName value to set
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Gets the lastName
     *
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets the lastName
     *
     * @param mixed $lastName value to set
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Gets the phone
     *
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets the phone
     *
     * @param mixed $phone value to set
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $phoneClean = str_replace(['(', ')', ' ', '-', '.', '+'], '', $phone);
        $ext = '';
        $xPos = stripos($phoneClean, 'x');
        if ($xPos !== false) {
            $ext = substr($phoneClean, $xPos);
            $phoneClean = substr($phoneClean, 0, $xPos);
        }

        if (strlen($phoneClean) === 11) {
            if ($phoneClean[0] != 1) {
                throw new InvalidDataException('Phone is invalid: ' . $phone);
            }
            $phoneClean = substr($phoneClean, 1);
        }

        if (!preg_match('/^\\d{10}$/', $phoneClean)) {
            throw new InvalidDataException('Phone is invalid: ' . $phone);
        }

        $this->phone = trim($phoneClean . ' ' . $ext);

        return $this;
    }

    /**
     * Gets the street
     *
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets the street
     *
     * @param mixed $street value to set
     *
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Gets the postalCode
     *
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets the postalCode
     *
     * @param mixed $postalCode value to set
     *
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        if (!preg_match('/^\d{5}(-\d{4})?$/', $postalCode)) {
            throw new InvalidDataException('Invalid Postal Code: ' . $postalCode);
        }
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Gets the region
     *
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Sets the region
     *
     * @param mixed $region value to set
     *
     * @return self
     */
    public function setRegion($region)
    {
        if (!preg_match('/^[A-Z]{2}$/', $region)) {
            throw new InvalidDataException('Invalid Region: ' . $region);
        }
        $this->region = $region;

        return $this;
    }

    /**
     * Gets the someDate
     *
     * @return mixed
     */
    public function getSomeDate()
    {
        return $this->someDate;
    }

    /**
     * Sets the someDate
     *
     * @param mixed $someDate value to set
     *
     * @return self
     */
    public function setSomeDate($someDate)
    {
        $this->someDate = $someDate;

        return $this;
    }

    /**
     * Gets the email
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param mixed $email value to set
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new InvalidDataException('Invalid Email: ' . $email);
        }
        $this->email = $email;

        return $this;
    }

    /**
     * Gets the ip
     *
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Sets the ip
     *
     * @param mixed $ip value to set
     *
     * @return self
     */
    public function setIp($ip)
    {
        if (filter_var($ip, FILTER_VALIDATE_IP) === false) {
            throw new InvalidDataException('Invalid IP: ' . $ip);
        }
        $this->ip = $ip;

        return $this;
    }

    /**
     * Gets the hexColor
     *
     * @return mixed
     */
    public function getHexColor()
    {
        return $this->hexColor;
    }

    /**
     * Sets the hexColor
     *
     * @param mixed $hexColor value to set
     *
     * @return self
     */
    public function setHexColor($hexColor)
    {
        if (!preg_match('/^#[a-f0-9]{6}+$/', $hexColor)) {
            throw new InvalidDataException('Invalid Hex Color: ' . $hexColor);
        }
        $this->hexColor = $hexColor;

        return $this;
    }

    /**
     * Gets the number
     *
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets the number
     *
     * @param mixed $number value to set
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (!intval($number) == $number) {
            throw new InvalidDataException('Invalid Number: ' . $number);
        }
        $this->number = $number;

        return $this;
    }

    /**
     * Gets the float
     *
     * @return mixed
     */
    public function getFloat()
    {
        return $this->float;
    }

    /**
     * Sets the float
     *
     * @param mixed $float value to set
     *
     * @return self
     */
    public function setFloat($float)
    {
        if (!is_numeric($float)) {
            throw new InvalidDataException('Invalid float: ' . $float);
        }
        $this->float = (float) $float;

        return $this;
    }

    /**
     * Gets the digit
     *
     * @return mixed
     */
    public function getDigit()
    {
        return $this->digit;
    }

    /**
     * Sets the digit
     *
     * @param mixed $digit value to set
     *
     * @return self
     */
    public function setDigit($digit)
    {
        if (intval($digit) != $digit) {
            throw new InvalidDataException('Invalid Digit: ' . $digit);
        }
        $this->digit = intval($digit);

        return $this;
    }

    /**
     * Gets the bool
     *
     * @return mixed
     */
    public function getBool()
    {
        return $this->bool;
    }

    /**
     * Sets the bool
     *
     * @param mixed $bool value to set
     *
     * @return self
     */
    public function setBool($bool)
    {
        switch ($bool) {
            case 't':
            case 'T':
            case 'y':
            case 'Y':
            case 'true':
            case 1:
            case '1':
                $bool = true;
                break;

            default:
                $bool = false;
        }
        $this->bool = $bool;

        return $this;
    }

    /**
     * Gets the country
     *
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the country
     *
     * @param mixed $country value to set
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (!in_array($country, ['EN', 'US'])) {
            throw new InvalidDataException('Country is not configured: ' . $country);
        }
        $this->country = $country;

        return $this;
    }

    /**
     * Gets the date
     *
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     *
     * @param mixed $date value to set
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
}