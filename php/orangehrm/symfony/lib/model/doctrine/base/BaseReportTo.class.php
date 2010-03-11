<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseReportTo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_emp_reportto');
        $this->hasColumn('erep_sup_emp_number as supervisorId', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '4',
             ));
        $this->hasColumn('erep_sub_emp_number as subordinateId', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '4',
             ));
        $this->hasColumn('erep_reporting_mode as reportingMode', 'integer', 2, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '2',
             ));
    }

    public function setUp()
    {
        $this->hasOne('Employee as supervisor', array(
             'local' => 'erep_sup_emp_number',
             'foreign' => 'emp_number'));

        $this->hasOne('Employee as subordinate', array(
             'local' => 'erep_sub_emp_number',
             'foreign' => 'emp_number'));
    }
}