<?php

App::uses('AppModel', 'Model');

/**
 * CoursesRoom Model
 *
 * @property Course $Course
 * @property Room $Room
 * @property CreatedUser $CreatedUser
 */
class CoursesRoom extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'name';
    public $actsAs = array('Containable');

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'name' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Nhập tên buổi'
            ),
            'mustUnique' => array(
                'rule' => array('checkDuyNhat','course_id'),
                'message' => 'Đã có buổi tên này thuộc khóa học rồi.',
                'last' => true),
        ),
        'course_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'room_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'begin' => array(
            'datetime' => array(
                'rule' => array('datetime'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Course' => array(
            'className' => 'Course',
            'foreignKey' => 'course_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Room' => array(
            'className' => 'Room',
            'foreignKey' => 'room_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'created_user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    public function checkDuyNhat($check,$course_id){        
        $conditions=array('CoursesRoom.course_id'=>$this->data[$this->name][$course_id],'CoursesRoom.name like'=>$check['name']); 
        $existing = $this->find('count',array('conditions'=>$conditions));
        
        return($existing<1);
    }
}
