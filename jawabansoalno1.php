<?php
	function biodata(){
		$name="Arif Nur Rohman";
		$age=26;
		$address="Jl.Pisangan Lama 3 no.11";
		$hobbies=array("nonton drama","main game","membuat web");

		$ya=true;
		$tidak=false;
		$married=$tidak;
		$interest_in_coding=$ya;

		class school{
			public $name;
			public $year_in;
			public $year_out;
			public $major;
		}
		$sd= new school();
		$sd->name='SDN Pisangan Timur 03';
		$sd->year_in='1998';
		$sd->year_out='2004';
		$sd->major='null';

		$smp=new school();
		$smp->name='SMPN 74 Jakarta';
		$smp->year_in='2004';
		$smp->year_out='2007';
		$smp->major='null';

		$smk=new school();
		$smk->name='SMKN 26 Jakarta';
		$smk->year_in='2007';
		$smk->year_out='2011';
		$smk->major='Listrik Industri';

		$listschools=array($sd,$smp,$smk);

		class skill{
			public $name;
			public $level;
		}
		$sk1= new skill();
		$sk1->name='java';
		$sk1->level='beginner';

		$sk2= new skill();
		$sk2->name='C++';
		$sk2->level='beginner';

		$sk3= new skill();
		$sk3->name='HTML';
		$sk3->level='beginner';

		$sk4= new skill();
		$sk4->name='PHP';
		$sk4->level='beginner';

		$sk5= new skill();
		$sk5->name='MySQL';
		$sk5->level='beginner';

		$listskills=array($sk1,$sk2,$sk3,$sk4,$sk5);
	
		echo json_encode($name);
		echo "<br/>";
		echo "Name		:".$name;
		echo "<br/>Age	:".$age;
		echo "<br/>Address:".$address;
		echo "<br/>Hobbies:".$hobbies[0].", ".$hobbies[1]." dan ".$hobbies[2];
		echo "<br/>Married:".$married;
		echo "<br/>List Schools:<br/>";
		foreach ($listschools as $ls){
		echo "School Name :".$ls->name." Year in:".$ls->year_in." Year Out:".$ls->year_out." Major:".$ls->major."<br/>";
		}
		foreach ($listskills as $lk){
		echo "Skill Name :".$lk->name." Level:".$lk->level."<br/>";
		}
		echo "Interest in Coding:".$interest_in_coding;

	}
	
	biodata();
?>