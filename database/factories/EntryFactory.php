<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entry>
 */
class EntryFactory extends Factory
{
    private static ?string $content = '
# Entry
This is a sample entry content. It can contain markdown or any other text format.

## Subheading
This is a subheading with some additional information.
You can also include code snippets, like this:
```php
echo "Hello, World!";
```
This is a sample entry content. It can contain markdown or any other text format.
## Another Subheading
This is another subheading with more details.
    ';

    private static ?string $description = '
# Description 1
This is a sample description for the entry. It provides a brief overview of the content and purpose of the entry.
## Description 2
This is a sample description for the entry. It provides a brief overview of the content and purpose of the entry.
## Description 3
This is a sample description for the entry. It provides a brief overview of the content and purpose of the entry.
    ';

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'content' => EntryFactory::$content,
            'description' => EntryFactory::$description,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
