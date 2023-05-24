<?php

use Livewire\Component;
use Livewire\WithPagination;

class TableInlineEdit extends Component
{
    use WithPagination;

    public $data = [
        [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'active' => true,
        ],
        [
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com',
            'active' => false,
        ],
        [
            'name' => 'Peter Smith',
            'email' => 'petersmith@example.com',
            'active' => true,
        ],
    ];

    public function edit($id)
    {
        $this->emit('showModal', $id);
    }

    public function update($id, $name, $email, $active)
    {
        $this->data[$id] = [
            'name' => $name,
            'email' => $email,
            'active' => $active,
        ];

        $this->emit('closeModal');
    }

    public function destroy($id)
    {
        unset($this->data[$id]);

        $this->emit('refreshData');
    }

    public function render()
    {
        return view('livewire.table-inline-edit', [
            'data' => $this->data,
        ]);
    }
}

