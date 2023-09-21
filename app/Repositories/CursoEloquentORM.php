<?php

namespace App\Repositories;

use App\DTO\CreateCursoDTO;
use App\DTO\UpdateCursoDTO;
use App\Models\Curso;
use App\Repositories\CursoRepositoryInterface;
use stdClass;

class CursoEloquentORM implements CursoRepositoryInterface
{
    public function __construct(
        protected Curso $model
    ){}

    public function getAll(string $filter = null): array
    {
        // return $this->model->all()->toArray();
        return $this->model
                    ->where(function ($query) use ($filter){
                        if($filter){
                            $query->where('nome', $filter);
                            $query->orWhere('body','like',"%{$filter}%");
                        }

                    })
                    ->all()
                    ->toArray();
    }

    public function findOne(string $id): stdClass|null
    {
        $curso = $this->model->find($id);
        if(!$curso){
            return null;
        }
        return (object) $curso->toArray();
    }

    public function delete(string $id): void
    {
        $this->model->findOrFail($id)->delete();
    }

    public function new(CreateCursoDTO $dto): stdClass
    {
        $curso = $this->model->create(
            (array) $dto
        );

        return (object) $curso->toArray();
    }

    public function update(UpdateCursoDTO $dto):stdClass|null
    {
        $curso = $this->model->find($dto->id);
        if(!$curso){
            return null;
        }
        $curso->update(
            (array) $dto
        );

        return (object) $curso->toArray();
    }

}

?>