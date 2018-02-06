<?php

require_once __DIR__ . '/../vendor/autoload.php';

$faker = Faker\Factory::create();

$output = '"UUID","Name","Phone","Street","Postal Code","Region","Some Date","Email","IP","Hex Color","Number","Float","Digit","Bool","Country","Date"' . PHP_EOL;

for ($i = 0; $i < 1000; $i++) {

    $country = $faker->randomElement(['EN', 'US']);
    switch ($country) {
        case 'EN':
            $date = $faker->date('d/m/Y');
            break;

        case 'US':
            $date = $faker->date('m/d/Y');
            break;
    }

    $output .= sprintf(
        '"%s","%s","%s","%s","%s,"%s","%s","%s","%s","%s","%s","%s","%s","%s","%s"',
        $faker->unique()->uuid,
        $faker->name,
        $faker->phoneNumber,
        $faker->streetAddress,
        $faker->postcode,
        $faker->stateAbbr,
        $faker->date,
        $faker->email,
        $faker->ipv4,
        $faker->hexColor,
        $faker->randomNumber,
        $faker->randomFloat,
        $faker->randomDigit,
        $faker->randomElement(['Y', 'N', 'true', 'false', 1, 0, 'on', 'off', 'T', 'F']),
        $country,
        $date
    ) . PHP_EOL;
}

echo $output;

file_put_contents('FakeData.csv', $output);
