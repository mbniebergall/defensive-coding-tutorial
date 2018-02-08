<?php

namespace ImportCsv;

require_once __DIR__ . '/ImportModel.php';
require_once __DIR__ . '/InvalidDataException.php';

class ImportData
{
    /** @var array */
    protected $data;

    /** @var array */
    protected $headers;

    /** @var string */
    protected $file;

    /**
     * @param string $file
     *
     * @return ImportData
     */
    public function setFile(string $file) : ImportData
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @return ImportData
     */
    public function readFileData() : ImportData
    {
        $data = file($this->file);

        $this->headers = $this->splitRecord(array_shift($data));
        $this->data    = $data;

        return $this;
    }

    /**
     * @return $this
     * @throws InvalidDataException
     */
    public function validateData()
    {
        foreach ($this->data as $key => $line) {
            $record = $this->splitRecord($line);
            $model  = $this->recordToModel($record);

            $this->data[$key] = $this->modelToArray($model);
        }
        return $this;
    }

    /**
     * @param array $record
     *
     * @return ImportModel
     * @throws InvalidDataException
     */
    protected function recordToModel(array $record) : ImportModel
    {
        if (count($record) !== 16) {
            throw new InvalidDataException('Expecting 16 data points per line, found ' . count($record));
        }

        $model = new ImportModel;
        $model
            ->setUuid($record[0])
            ->setFirstName($record[1])
            ->setLastName($record[1])
            ->setPhone($record[2])
            ->setStreet($record[3])
            ->setPostalCode($record[4])
            ->setRegion($record[5])
            ->setSomeDate($record[6])
            ->setEmail($record[7])
            ->setIp($record[8])
            ->setHexColor($record[9])
            ->setNumber($record[10])
            ->setFloat($record[11])
            ->setDigit($record[12])
            ->setBool($record[13])
            ->setCountry($record[14])
            ->setDate($record[15]);

        return $model;
    }

    /**
     * @param ImportModel $model
     *
     * @return array
     */
    protected function modelToArray(ImportModel $model) : array
    {
        $data = [
            'Uuid' => $model->getUuid(),
            'FirstName' => $model->getFirstName(),
            'LastName' => $model->getLastName(),
            'Phone' => $model->getPhone(),
            'Street' => $model->getStreet(),
            'PostalCode' => $model->getPostalCode(),
            'Region' => $model->getRegion(),
            'SomeDate' => $model->getSomeDate(),
            'Email' => $model->getEmail(),
            'Ip' => $model->getIp(),
            'HexColor' => $model->getHexColor(),
            'Number' => $model->getNumber(),
            'Float' => $model->getFloat(),
            'Digit' => $model->getDigit(),
            'Bool' => $model->getBool(),
            'Country' => $model->getCountry(),
            'Date' => $model->getDate()
        ];

        return $data;
    }

    /**
     * @param string $line
     *
     * @return array
     */
    protected function splitRecord(string $line) : array
    {
        // remove begining double quotes
        $line = substr($line, 1, -1);

        // break apart by ","
        $split = explode('","', $line);

        return $split;
    }

    /**
     * Displays the data
     */
    public function displayData()
    {
        print_r($this->data);
    }
}

$importData = new ImportData;
$importData->setFile(__DIR__ . '/FakeData.csv')
    ->readFileData()
    ->validateData()
    ->displayData();