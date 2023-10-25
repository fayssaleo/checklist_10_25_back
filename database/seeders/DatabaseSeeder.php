<?php

namespace Database\Seeders;

use App\Modules\DamageType\Models\DamageType;
use App\Modules\Department\Models\Department;
use App\Modules\Equipment\Models\Equipment;
use App\Modules\Fonction\Models\Fonction;
use App\Modules\ProfileGroup\Models\ProfileGroup;
use App\Modules\User\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $department = new Department();
        $department->name="IT";
        $department->email="hamza.saqalli@tangeralliance.com,ayoub.bencheikh@tangeralliance.com,fayssal.ourezzouq@tangeralliance.com";
        $department->save();

        //-----------------------------

        $fonction= new Fonction();
        $fonction->name="ADMIN";
        $fonction->department_id=$department->id;
        $fonction->save();

        //-----------------------------

        $fonction= new Fonction();
        $fonction->name="TECHNICIEN";
        $fonction->department_id=$department->id;
        $fonction->save();

        //-----------------------------

        $fonction= new Fonction();
        $fonction->name="SUPERVISOR";
        $fonction->department_id=$department->id;
        $fonction->save();
        //-----------------------------



        $department = new Department();
        $department->name="TECHNIQUE";
        $department->email="yassin.yaddouch@tangeralliance.com,badreddine.ennaciri@tangeralliance.com,mustafa.bouirig@tangeralliance.com";
        $department->save();
        //-----------------------------

        $fonction= new Fonction();
        $fonction->name="ADMIN";
        $fonction->department_id=$department->id;
        $fonction->save();

        //-----------------------------
        $fonction= new Fonction();
        $fonction->name="TECHNICIEN";
        $fonction->department_id=$department->id;
        $fonction->save();
        //-----------------------------

        $fonction= new Fonction();
        $fonction->name="SUPERVISOR";
        $fonction->department_id=$department->id;
        $fonction->save();
        //-----------------------------




        $department = new Department();
        $department->name="OPERATIONS";
        $department->email="foreman@tangeralliance.com,shiftmanager@tangeralliance.com,iliass.errabai@tangeralliance.com";
        $department->save();
        //-----------------------------
        $fonction= new Fonction();
        $fonction->name="DRIVER";
        $fonction->department_id=$department->id;
        $fonction->save();
        //-----------------------------

        $fonction= new Fonction();
        $fonction->name="FOREMAN";
        $fonction->department_id=$department->id;
        $fonction->save();
        //-----------------------------
        $fonction= new Fonction();
        $fonction->name="SHIFT MANAGER";
        $fonction->department_id=$department->id;
        $fonction->save();
        //-----------------------------
        $fonction= new Fonction();
        $fonction->name="CHECKER";
        $fonction->department_id=$department->id;
        $fonction->save();
        //-----------------------------

        $profileGroup=new ProfileGroup();
        $profileGroup->name="STS";
        $profileGroup->department_id=$department->id;
        $profileGroup->save();

        $equipment=new Equipment();
        $equipment->name="STS01";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="STS02";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="STS03";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="STS04";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="STS5";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="STS06";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="STS07";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="STS08";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $TechniqueDepartment=Department::select()->where("name","TECHNIQUE")->first();
        $ITDepartment=Department::select()->where("name","IT")->first();

        $damageType=new DamageType();
        $damageType->name="Four cameras at ground level";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Emergency stop button";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Seatbelt";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Flashlight Alarm Lamps";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Alarm gantry (Left-right movement)";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Alarme (HC mode) & Horn ";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Elevator ";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Seats & curtains & accessories ";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Telephone handset & accessories";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$ITDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Radio";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$ITDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Tablet";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$ITDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Air conditioning & remote control";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Doors, windows & glass & windscreenwipers";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="floodlight ";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Spreader & Flippers";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Extinguisher";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Skew & List &Trim & Limit switch";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Hoist & Trolley & Gantry speed ";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Joïstic";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Cab movement (trolley)";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Other(Cabin Cleaning …)";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();


        //--------------------------------------------------------------

        $profileGroup=new ProfileGroup();
        $profileGroup->name="RTG";
        $profileGroup->department_id=$department->id;
        $profileGroup->save();

        $equipment=new Equipment();
        $equipment->name="RTG01";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG02";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG03";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG04";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG05";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG06";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG07";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG08";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG09";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG10";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG11";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG12";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG13";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG14";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG15";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG17";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        $equipment=new Equipment();
        $equipment->name="RTG18";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG19";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG20";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG21";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG22";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        $TechniqueDepartment=Department::select()->where("name","TECHNIQUE")->first();
        $ITDepartment=Department::select()->where("name","IT")->first();

        $damageType=new DamageType();
        $damageType->name="Emergency stop button";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Tire pressures";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Seatbelt";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="'LED' warning light";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Flashlight Alarm Lamps";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Alarm gantry (Left-right movement)";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Tires & bumpers";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name=" Trim & List & Skew ";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Seats and accessories";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Telephone handset and accessories";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$ITDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Instructions reading screen";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Radio";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$ITDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Tablet";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$ITDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Dashboard panel ";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Loud speaker";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Air conditioning & remote control";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Spreader & Flippers";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Doors, windows & glass & windscreenwipers";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="floodlight ";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Extinguisher";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Joïstic";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Cabin Cleaning ";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Others";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();
        //--------------------------------------------------------------

        $profileGroup=new ProfileGroup();
        $profileGroup->name="TT";
        $profileGroup->department_id=$department->id;
        $profileGroup->save();

        $equipment=new Equipment();
        $equipment->name="RR01";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="RR02";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="TT01";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="TT02";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="TT03";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="TT04";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="TT05";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="TT06";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="TT07";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="TT08";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="TT09";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="TT10";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT11";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT12";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT13";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT14";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT15";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT15";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT16";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT17";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT18";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT19";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT20";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT21";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT22";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT23";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT24";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT25";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT26";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT27";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT28";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT29";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT30";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        
        $equipment=new Equipment();
        $equipment->name="TT31";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT32";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT33";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT34";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT35";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT36";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT37";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT38";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT39";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        
        $equipment=new Equipment();
        $equipment->name="TT40";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();
        


        $TechniqueDepartment=Department::select()->where("name","TECHNIQUE")->first();
        $ITDepartment=Department::select()->where("name","IT")->first();



        $damageType=new DamageType();
        $damageType->name="Tire pressure";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Horn";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Seatbelt";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Fire extinguishers";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Flashlight Alarm Lamps";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Brake system warning alarm";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Reverse alarm";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Connection cable";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Tires and accessories";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Battery key";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Cabin Cleaning ";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Water level of the cleaner";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="wing mirror ";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Doors, windows & glass & windscreenwipers";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Steering system";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Braking system";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Indicators, symbols on dashboard";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="floodlight ";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Instructions read screen";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Radio";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$ITDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Tablet";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$ITDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Air conditioning ";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Other";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();


        //--------------------------------------------------------------

        $profileGroup=new ProfileGroup();
        $profileGroup->name="Bus";
        $profileGroup->department_id=$department->id;
        $profileGroup->save();

        $equipment=new Equipment();
        $equipment->name="Bus1";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Bus2";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Bus3";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Bus4";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Bus5";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Bus6";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Bus7";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Bus8";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Bus9";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $TechniqueDepartment=Department::select()->where("name","TECHNIQUE")->first();
        $ITDepartment=Department::select()->where("name","IT")->first();

        $damageType=new DamageType();
        $damageType->name="Tire pressure";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Beacon";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Horn";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Braking system";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Seatbelt";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Fire extinguishers";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Rear lights";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Hazard lights";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Tires and accessories";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Car cleaning level";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="wing mirror";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Seats and accessories";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Steering system";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Fuel level";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="windscreenwipers";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Hand brake";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="car radio";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Indicators, symbols on dashboard";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Air conditioner";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Headlights";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Windows and windshields";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Other";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        //--------------------------------------------------------------

        $profileGroup=new ProfileGroup();
        $profileGroup->name="RST";
        $profileGroup->department_id=$department->id;
        $profileGroup->save();

        $equipment=new Equipment();
        $equipment->name="RST01";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RST02";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RST03";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RST04";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();


        $TechniqueDepartment=Department::select()->where("name","TECHNIQUE")->first();
        $ITDepartment=Department::select()->where("name","IT")->first();

        $damageType=new DamageType();
        $damageType->name="Tire pressure";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Flashlight Alarm Lamps";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Braking system";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Horn";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Seatbelt";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Fire extinguishers";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Warning rear alarm";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Reverse alarm";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Emergency stop button";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Tires and accessories";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="RS cleaning level (IN& OUT side )";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="wing mirror";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Seats and accessories";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Battery key";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Steering system";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Engine oil";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();


        $damageType=new DamageType();
        $damageType->name="Spreader & Flippers";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();


        $damageType=new DamageType();
        $damageType->name="Hand brake";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Air conditioner";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Doors, windows & glass & windscreenwipers";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();


        $damageType=new DamageType();
        $damageType->name="Instructions read screen";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Steering system";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Indicators, symbols on dashboard";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Radio";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$ITDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Tablet";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$ITDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Other";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        //--------------------------------------------------------------

        $profileGroup=new ProfileGroup();
        $profileGroup->name="HEAVY Forklift ";
        $profileGroup->department_id=$department->id;
        $profileGroup->save();

        $equipment=new Equipment();
        $equipment->name="HEAVY Forklift 1";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="HEAVY Forklift 2";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="HEAVY Forklift 3";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="HEAVY Forklift 4";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="HEAVY Forklift 5";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="HEAVY Forklift 6";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="HEAVY Forklift 7";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="HEAVY Forklift 8";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="HEAVY Forklift 9";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $TechniqueDepartment=Department::select()->where("name","TECHNIQUE")->first();
        $ITDepartment=Department::select()->where("name","IT")->first();

        $damageType=new DamageType();
        $damageType->name="Tire pressure";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Flashlight Alarm Lamps";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Braking system";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Horn";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Seatbelt";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Fire extinguishers";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Reverse alarm";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Emergency stop button";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name=" Warning rear alarm ";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Tires and accessories";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="FKL cleaning level";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Interior mirror";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Seats and accessories";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Battery key";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Engine oil";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Forklift fork";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Hand brake";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Doors, windows & glass & windscreenwipers";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Instructions read screen";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Steering system";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Seats and accessories";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Indicators, symbols on dashboard";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Radio";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$ITDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Tablet";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$ITDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Other";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

          //--------------------------------------------------------------

          $profileGroup=new ProfileGroup();
          $profileGroup->name="Mini Bus";
          $profileGroup->department_id=$department->id;
          $profileGroup->save();

          $equipment=new Equipment();
          $equipment->name="Mini Bus1";
          $equipment->profile_group_id=$profileGroup->id;
          $equipment->save();

          $equipment=new Equipment();
          $equipment->name="Mini Bus2";
          $equipment->profile_group_id=$profileGroup->id;
          $equipment->save();

          $equipment=new Equipment();
          $equipment->name="Mini Bus3";
          $equipment->profile_group_id=$profileGroup->id;
          $equipment->save();

          $equipment=new Equipment();
          $equipment->name="Mini Bus4";
          $equipment->profile_group_id=$profileGroup->id;
          $equipment->save();

          $equipment=new Equipment();
          $equipment->name="Mini Bus5";
          $equipment->profile_group_id=$profileGroup->id;
          $equipment->save();

          $equipment=new Equipment();
          $equipment->name="Mini Bus6";
          $equipment->profile_group_id=$profileGroup->id;
          $equipment->save();

          $equipment=new Equipment();
          $equipment->name="Mini Bus7";
          $equipment->profile_group_id=$profileGroup->id;
          $equipment->save();

          $equipment=new Equipment();
          $equipment->name="Mini Bus8";
          $equipment->profile_group_id=$profileGroup->id;
          $equipment->save();

          $equipment=new Equipment();
          $equipment->name="Mini Bus9";
          $equipment->profile_group_id=$profileGroup->id;
          $equipment->save();

          $TechniqueDepartment=Department::select()->where("name","TECHNIQUE")->first();
          $ITDepartment=Department::select()->where("name","IT")->first();

          $damageType=new DamageType();
          $damageType->name="Tire pressure";
          $damageType->important=true;
          $damageType->profile_group_id=$profileGroup->id;
          $damageType->department_id=$TechniqueDepartment->id;
          $damageType->save();

          $damageType=new DamageType();
          $damageType->name="Beacon";
          $damageType->important=true;
          $damageType->profile_group_id=$profileGroup->id;
          $damageType->department_id=$TechniqueDepartment->id;
          $damageType->save();

          $damageType=new DamageType();
          $damageType->name="Horn";
          $damageType->important=true;
          $damageType->profile_group_id=$profileGroup->id;
          $damageType->department_id=$TechniqueDepartment->id;
          $damageType->save();

          $damageType=new DamageType();
          $damageType->name="Braking system";
          $damageType->important=true;
          $damageType->profile_group_id=$profileGroup->id;
          $damageType->department_id=$TechniqueDepartment->id;
          $damageType->save();

          $damageType=new DamageType();
          $damageType->name="Seatbelt";
          $damageType->important=true;
          $damageType->profile_group_id=$profileGroup->id;
          $damageType->department_id=$TechniqueDepartment->id;
          $damageType->save();

          $damageType=new DamageType();
          $damageType->name="Fire extinguishers";
          $damageType->important=true;
          $damageType->profile_group_id=$profileGroup->id;
          $damageType->department_id=$TechniqueDepartment->id;
          $damageType->save();

          $damageType=new DamageType();
          $damageType->name="Rear lights";
          $damageType->important=true;
          $damageType->profile_group_id=$profileGroup->id;
          $damageType->department_id=$TechniqueDepartment->id;
          $damageType->save();

          $damageType=new DamageType();
          $damageType->name="Hazard lights";
          $damageType->important=true;
          $damageType->profile_group_id=$profileGroup->id;
          $damageType->department_id=$TechniqueDepartment->id;
          $damageType->save();

          $damageType=new DamageType();
          $damageType->name="Tires and accessories";
          $damageType->important=false;
          $damageType->profile_group_id=$profileGroup->id;
          $damageType->department_id=$TechniqueDepartment->id;
          $damageType->save();

          $damageType=new DamageType();
          $damageType->name="Car cleaning level";
          $damageType->important=false;
          $damageType->profile_group_id=$profileGroup->id;
          $damageType->department_id=$TechniqueDepartment->id;
          $damageType->save();

          $damageType=new DamageType();
        $damageType->name="wing mirror";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Seats and accessories";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Steering system";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Fuel level";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="windscreenwipers";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Hand brake";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="car radio";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Indicators, symbols on dashboard";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Air conditioner";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Headlights";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Windows and windshields";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Other";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        //--------------------------------------------------------------

        $profileGroup=new ProfileGroup();
        $profileGroup->name="Light Forklift";
        $profileGroup->department_id=$department->id;
        $profileGroup->save();

        $equipment=new Equipment();
        $equipment->name="Light Forklift 1";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Light Forklift 2";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Light Forklift 3";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Light Forklift 4";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Light Forklift 5";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Light Forklift 6";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Light Forklift 7";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Light Forklift 8";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Light Forklift 9";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $TechniqueDepartment=Department::select()->where("name","TECHNIQUE")->first();
        $ITDepartment=Department::select()->where("name","IT")->first();

        $damageType=new DamageType();
        $damageType->name="Tire pressure";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Flashlight Alarm Lamps";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Braking system";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Horn";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Seatbelt";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Fire extinguishers";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Warning rear alarm";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Reverse alarm";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Emergency stop button";
        $damageType->important=true;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Tires and accessories";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="FKL cleaning level";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Interior mirror";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();



        $damageType=new DamageType();
        $damageType->name="Seats and accessories";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Battery key";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Engine oil";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Forklift fork";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Hand brake";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Instructions read screen";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Steering system";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Indicators, symbols on dashboard";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Others";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        //--------------------------------------------------------------

        $profileGroup=new ProfileGroup();
        $profileGroup->name="Checker's cabins";
        $profileGroup->department_id=$department->id;
        $profileGroup->save();

        $equipment=new Equipment();
        $equipment->name="Checker's cabin 01";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Checker's cabin 02";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Checker's cabin 03";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Checker's cabin 04";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Checker's cabin 05";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Checker's cabin 06";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Checker's cabin 07";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="Checker's cabin 08";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();


        $TechniqueDepartment=Department::select()->where("name","TECHNIQUE")->first();
        $ITDepartment=Department::select()->where("name","IT")->first();

        $damageType=new DamageType();
        $damageType->name="Windows";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Light's cabin";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Emergency stop";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Cleaning";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Other";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();
        //--------------------------------------------------------------

        $profileGroup=new ProfileGroup();
        $profileGroup->name="Spreaders RTG";
        $profileGroup->department_id=$department->id;
        $profileGroup->save();

        $equipment=new Equipment();
        $equipment->name="SPR01";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="SPR02";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="SPR03";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="SPR04";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="SPR05";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="SPR06";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="SPR07";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="SPR08";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="SPR09";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="SPR10";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="SPR11";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="SPR12";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        

        $equipment=new Equipment();
        $equipment->name="SPR13";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="SPR14";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="SPR15";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="SPR16";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="SPR17";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="SPR18";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="SPR19";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="SPR20";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="SPR21";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="SPR22";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();


        $TechniqueDepartment=Department::select()->where("name","TECHNIQUE")->first();
        $ITDepartment=Department::select()->where("name","IT")->first();

        $damageType=new DamageType();
        $damageType->name="Left Seaside flipper";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Left Landside flipper";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Right Seaside flipper";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Right Landside flipper";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();




        $damageType=new DamageType();
        $damageType->name="Twin's mode";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Spreader's lights";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Spreader's structure";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="Other";
        $damageType->important=false;
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();


        //--------------------------------------------------------------------------
        $ITDepartment=Department::select()->where("name","IT")->first();
        $AdminItFonction=$ITDepartment->fonctions()->where("name","ADMIN")->first();

        $ITDepartment2=Department::select()->where("name","OPERATIONS")->first();
        $driverFonction=$ITDepartment2->fonctions()->where("name","DRIVER")->first();


        $user=new User();
        $user->username="admin";
        $user->lastName="admin";
        $user->firstName="admin";
        $user->email="admin@gmail.com";
        $user->password="Initial123";
        $user->phoneNumber="0604996360";
        $user->fonction_id=$AdminItFonction->id;
        $user->save();

        $user=new User();
        $user->username="driverSTS";
        $user->lastName="test";
        $user->firstName="test";
        $user->email="test@gmail.com";
        $user->password="Initial123";
        $user->phoneNumber="0878654656";
        $user->fonction_id=$driverFonction->id;
        $user->save();
        $profileGroup=ProfileGroup::select()->where("name","STS")->first();
        $profileGroup->users()->attach($user);
    }
}
