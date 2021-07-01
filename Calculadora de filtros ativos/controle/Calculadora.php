<?php 
	class Calculadora{
		public static function passaBaixa2($K,$Fc,$filtro,$nFaixas,$fator){
			$a =0.0;
			$b =0.0;
			$C2 = 0.0;
			$C1 = 0.0;
			$R1 = 0.0;
			$R2 = 0.0;
			$R3 = 0.0;
			$R4 = 0.0;	
			$Wc=$Fc*(2*pi());
			$dados = ""; 
			//Chebyshev
			if ($filtro==1) {
				if($nFaixas==2){
					if($fator==0.1){
						$a=2.372356;
						$b=3.314037;
					}
					else if($fator==0.5){
						$a=1.425625;
						$b=1.516203;                                                            
					}
					else if($fator==1){
						$a=1.097734;
						$b=1.102510;
					}
					else if($fator==2){
						$a=0.803816;
						$b=0.826060;
					}
					else if($fator==3){
						$a=0.644900;
						$b=0.707948;					
					}
				}
				else if($nFaixas==3){
					if($fator==0.1){
						$a=0.969406;
						$b=1.689747;
					}
					else if($fator==0.5){
						$a=0.494171;
						$b=1.142448;                                                         
					}
					else if($fator==1){
						$a=0.279072;
						$b=0.986505;
					}
					else if($fator==2){
						$a=0.368911;
						$b=0.886095;
					}
					else if($fator==3){
						$a=0.298620;
						$b=0.829174;
					}
				}
				else if($nFaixas==4){
					if($fator==0.1){
						$a=0.528313;
						$b=1.330031;
					}
					else if($fator==0.5){
						$a=0.350706;
						$b=1.063519;                                                            
					}
					else if($fator==1){
						$a=0.279072;
						$b=0.986505;
					}
					else if($fator==2){
						$a=0.209775;
						$b=0.928675;
					}
					else if($fator==3){
						$a=0.170341;
						$b=0.903087;
					}
				}
				else if ($nFaixas==5){
					if($fator==0.1){
						$a=0.333067;
						$b=1.194937;
					}
					else if($fator==0.5){
						$a=0.223926;
						$b=0.586245;                                                             
					}
					else if($fator==1){
						$a=0.178917;
						$b=0.988315;
					}
					else if($fator==2){
						$a=0.134922;
						$b=0.952167;
					}
					else if($fator==3){
						$a=0.109720;
						$b=0.287250;
					}
				}
				else if ($nFaixas==6){
					if($fator==0.1){
						$a=0.229387;
						$b=1.129387;
					}
					else if($fator==0.5){
						$a=0.155300;
						$b=1.023023;                                                   
					}
					else if($fator==1){
						$a=0.124362;
						$b=0.990732;
					}
					else if($fator==2){
						$a=0.093946;
						$b=0.965952;
					}
					else if($fator==3){
						$a=0.350613;
						$b=0.099926;
					}	
				} 				
			$C2=10/($Fc);
			$T11=($a**2);
			$T12=($C2**2);
			$T1=$T11*$T12;
			$T2=4*$b;
			$T3=($K+1);
			$C1=$T1/($T2*$T3);
			$C2=$C2*(10**-6);
			$C1=$C1*(10**-6);

			$R2=2*($K+1)/(($a*$C2+sqrt(($a**2)*($C2**2)-4*$b*$C1*$C2*($K+1)))*$Wc);
			$R1=$R2/$K;
			$R3=1/($b*$C1*$C2*($Fc**2)*$R2);


			$dados ="C1: $C1 , C2: $C2 , R1: $R1 , R2: $R2 , R3: $R3";

			}
			//Butterworth
			else if($filtro==2){
				$b=1;
				if ($nFaixas==2) {
					$a=1.414214;
				}
				else if ($nFaixas==3) {
					$a=0.765367;
				}
				else if ($nFaixas==4) {
					$a=0.618034;
				}
				else if ($nFaixas==5) {
					$a=0.517638;
				}
				else if ($nFaixas==6) {
					$a=0.517638;
				}
				else if ($nFaixas==7) {
					$a=0.445042;
				}
				else if ($nFaixas==8) {
					$a=0.390181;
				}
			$C2=10/($Fc);
			$C1=($a**2)*$C2/4*$b*($K+1);
			$C2=$C2*(10**-6);
			$C1=$C2;
				
			$T1=$a*$C2;
			$T2=($a**2);
			$T3=4*$b*($K-1);
			$T4=($C2**2);
			$T5=(4*$b*$C1*$C2);
			
			$x = sqrt(($T2+$T3)*$T4-$T5);
			$x2 = $T2+$T3;
			$x3 =  $x2 * $T4;
			$x4 = $x3 - $T5;
			$raizp = $x;

			$r1=2/(($T1+$raizp)*$Wc);

			$R1 = $r1;

			$R2=1/($b*$C1*$C2*$R1*($Wc**2));

			$R3=$K*($R1+$R2)/($K-1);
			$R4=$K*($R1+$R2);

			$R1=$R1/1000;
			$R2=$R2/1000;
			$R3=$R3/1000;
			$R4=$R4/1000;		
			$C1=$C1*(10**6);
			$C2=$C2*(10**6);
			$dados ="$C1;$C2;$R1;$R2;$R3;$R4;";
			}
			return $dados;
		}

		public static function passaFaixa($K,$Fc1,$Fc2){			
			$Fo=sqrt($Fc1*$Fc2);
			$Qo=$Fo/($Fc2-$Fc1);
			$C =10/$Fo;
			$C=$C*(10**-6);
			$Wo=2*pi()*$Fo;
			$x=pow($Qo,2);
			$x1=2*$x;
			//if($K<$x1){
			//	return "Erro ao colocar o ganho  , K:$K , 2*Qo^2: $x1 , Qo: $Qo";
			//}
			$x3=$Wo*$C*$K;
			$R1=$Qo/$x3;
			//$R2=$Qo/($Wo*$C*(2*pow($Qo,2)-$K));
			$R2=$Qo/$Wo*$C*(2*pow($Qo, 2)-$K);
			$R3=2*$Qo/($Wo*$C);
			$x3=$Wo*$C*$K;
			$R1=$R1/1000;
			$R2=$R2/1000;
			$R3=$R3/1000;
			$C=$C*(10**6);
			return "$R1;$R2;$R3;$C";
		}
		public static function rejeitaFaixa($Fc1,$Fc2){
			$Fo=sqrt($Fc1*$Fc2);
			$Qo=$Fo/($Fc2-$Fc1);
			$C =10/$Fo;
			$C=$C*(10**-6);
			$Wo=2*pi()*$Fo;
			//if($K<pow($Qo, 2)){
			//	return "o Ganho não pode ser maior que : " + pow($Qo, 2) + "";
			//}
			$R1=1/(2*$Qo*$Wo*$C);
			$R2=(2*$Qo)/($Wo*$C);
			$R3=($R1*$R2)/($R1+$R2);
			$R1=$R1/1000;
			$R2=$R2/1000;
			$R3=$R3/1000;
			$C=$C*(10**6);

			return "$R1;$R2;$R3;$C;$Qo;$Fo";
		}

		//private $Fc1x;
		//private function setFc1($Fc1){
		//	$this->Fc1x = $Fc1;
		//}
		//private function getFc1(){
		//	require $this->Fc1x;
		//}

		public static function rejeitaFaixaReverso($R1,$R2,$R3,$C){
			$R1=$R1*1000;
			$R2=$R2*1000;
			$R3=$R3*1000;
			$Fo=10/$C;
			$C=$C*(10**-6);
			$Wo=2*pi()*$Fo;
			$Qo=1/(2*$R1*$Wo*$C);
			$x=$Fo**2;
			$x2=$Fo/$Wo;
			//$Fc1 = $this->getFc1();
			//$Fc1 = ($x2 + $Fc1)/$x;
			//$Fc1 = 1/$Fc1;			
			//$Fc2 = $Fc1 + $x2;
			return "$Fo;$Wo;$Qo;$x;$x2";
		}
	}
?>