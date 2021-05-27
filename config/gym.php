<?php

return [
        'user-form-details' => [
            'fields' => [
                'staff_no' => [
                    'display' => 'Staff Number',
                    'formType' => 'text',
                    'source' => null,
                    'position' => 'col-3',
                    'browse' => true,
                    'read' => true,
                    'edit' => true,
                    'add' => false,
                    'delete' => false
                ],
                'membership_no' => [
                    'display' => 'Membership Number',
                    'formType' => 'text',
                    'source' => null,
                    'position' => 'col-3',
                    'browse' => false,
                    'read' => true,
                    'edit' => true,
                    'add' => false,
                    'delete' => false
                ],
                'name' => [
                    'display' => 'Fullname',
                    'formType' => 'text',
                    'source' => null,
                    'position' => 'col-4',
                    'browse' => true,
                    'read' => true,
                    'edit' => true,
                    'add' => false,
                    'delete' => false
                ],
                'email' => [
                    'display' => 'Email Address',
                    'formType' => 'text',
                    'source' => null,
                    'position' => 'col-3',
                    'browse' => true,
                    'read' => true,
                    'edit' => false,
                    'add' => false,
                    'delete' => false
                ],
                'department_id' => [
                    'display' => 'Department',
                    'formType' => 'select',
                    'source' => 'departments',
                    'position' => 'col-3',
                    'browse' => false,
                    'read' => true,
                    'edit' => true,
                    'add' => false,
                    'delete' => false
                ],

                'mobile' => [
                    'display' => 'Mobile',
                    'formType' => 'text',
                    'source' => null,
                    'position' => 'col-3',
                    'browse' => false,
                    'read' => true,
                    'edit' => true,
                    'add' => false,
                    'delete' => false
                ],
                'dob' => [
                    'display' => 'Date of Birth',
                    'formType' => 'date',
                    'source' => null,
                    'position' => 'col-3',
                    'browse' => false,
                    'read' => true,
                    'edit' => true,
                    'add' => false,
                    'delete' => false
                ],
                'age' => [
                    'display' => 'Age',
                    'formType' => 'text',
                    'source' => 'departments',
                    'position' => 'col-3',
                    'browse' => false,
                    'read' => true,
                    'edit' => true,
                    'add' => false,
                    'delete' => false
                ],
                'sex' => [
                    'display' => 'Sex',
                    'formType' => 'select',
                    'source' => ['male', 'female'],
                    'position' => 'col-3',
                    'browse' => false,
                    'read' => true,
                    'edit' => true,
                    'add' => false,
                    'delete' => false
                ],
                'signature' => [
                    'display' => 'Signature',
                    'formType' => 'image',
                    'source' => null,
                    'position' => 'col-3',
                    'browse' => false,
                    'read' => false,
                    'edit' => true,
                    'add' => false,
                    'delete' => false
                ],
                'type' => [
                    'display' => 'Type',
                    'formType' => 'select',
                    'source' => ['staff', 'medical', 'instructor'],
                    'position' => 'col-3',
                    'browse' => false,
                    'read' => true,
                    'edit' => true,
                    'add' => false,
                    'delete' => false
                ],
                'agreed_terms' => [
                    'display' => 'Terms of Agreement',
                    'formType' => 'checkbox',
                    'source' => null,
                    'position' => 'col-3',
                    'browse' => false,
                    'read' => true,
                    'edit' => false,
                    'add' => false,
                    'delete' => false
                ],
            ]
        ],
];
