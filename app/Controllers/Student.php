<?php

namespace App\Controllers;

use App\Models\StudentModel;
use CodeIgniter\HTTP\RedirectResponse;
use ReflectionException;

class Student extends BaseController
{
    private StudentModel $studentModel;
    private static array $rules = [
        'nome' => 'required|min_length[3]',
        'endereco' => 'required|min_length[5]',
        'foto' => 'ext_in[foto,jpg]', #obrigatoriedade => uploaded[foto]|
    ];

    public function __construct()
    {
        $this->studentModel = new StudentModel();
    }

    public function index(): string
    {
        return $this->loadView('students/student', [
            'flashMessage' => $this->session->getFlashdata('studentMessage'),
            'title' => 'Alunos',
            'students' => $this->studentModel->paginate(5),
            'pager' => $this->studentModel->pager
        ]);
    }

    public function delete(int $id): RedirectResponse
    {
        $this->showMessage(true, 'excluído');
        if (!$this->studentModel->delete($id)) {
            $this->showMessage(false, 'excluir');
        }

        return redirect()->to('/');
    }

    public function create(): string
    {
        return $this->loadView('students/form', ['title' => 'Cadastro aluno']);
    }

    public function edit(int $id): string
    {
        return $this->loadView('students/form', [
            'title' => 'Alterar aluno',
            'student' => $this->studentModel->find($id)
        ]);
    }

    /**
     * @throws ReflectionException
     */
    public function store()
    {
        if (!$this->validate(self::$rules)) {
            redirect()->back()->withInput();
            return $this->loadView('students/form', ['validation' => $this->validator]);
        }

        $this->showMessage(true, 'salvo');
        $file = $this->request->getFile('foto');

        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('upload/', $imageName);
        }

        $dataPost = $this->request->getPost();
        if (isset($imageName)) {
            $dataPost['foto'] = $imageName;
        }

        if (!$this->studentModel->save($dataPost)) {
            $this->showMessage(false, 'salvar');
        }

        return redirect()->to('/');
    }

}
