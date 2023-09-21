<?php

namespace App\Services;

use App\DTO\CreateCursoDTO;
use App\DTO\UpdateCursoDTO;
use App\Repositories\CursoRepositoryInterface;
use stdClass;

class CursoService
{
    // protected $repository;

    public function __construct(
        protected CursoRepositoryInterface $repository,
        
    ){}

    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);

    }

    public function findOne(string $id): stdClass|null
    {
        return $this->repository->findOne($id);
    }

    // // método NEW antes do DTO
    // public function new(
    //     string $nome,
    //     string $status,
    //     string $body
    // ):stdClass
    // {
    //     return $this->repository->new(
    //         $nome,
    //         $status,
    //         $body
    //     );
    // } 

        // método NEW DPOIS do DTO
        public function new(CreateCursoDTO $dto):stdClass
        {
            return $this->repository->new($dto);
        } 

    // // método UPDATE antes do DTO
    // public function update(
    //     string $id,
    //     string $nome,
    //     string $status,
    //     string $body
    // ):stdClass|null
    // {
    //     return $this->repository->update(
    //         $id,
    //         $nome,
    //         $status,
    //         $body
    //     );
    // }

    // método UPDATE DEPOIS do DTO
    public function update(UpdateCursoDTO $dto):stdClass|null
    {
        return $this->repository->update($dto);
    }

    public function delete(string|int $id): void
    {
        $this->repository->delete($id);
    }

}
