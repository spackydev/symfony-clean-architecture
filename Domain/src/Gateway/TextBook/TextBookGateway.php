<?php

namespace MatCaps\Beta\Domain\Gateway\TextBook;

use MatCaps\Beta\Domain\Entity\Generics\SchoolClass;
use MatCaps\Beta\Domain\Entity\TextBook\Textbook;

interface TextBookGateway
{

    public function add(TextBook $textBook): void;

    public function findById(string $id): ?Textbook;

    public function findAll(): array;

    public function remove(Textbook $textbook): void;

    public function update(Textbook $textBook): bool;

    public function findAllSharedWith(SchoolClass $schoolClass): array;
}