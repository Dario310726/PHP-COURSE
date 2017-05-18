<?php
$verBib="Intranet 24/03/2010 15h00";

$BordaTabela='#033C5F' ;
$FundoTabelaTituloCampo='#E9F0F4' ;
$TituloTabela='#D6DBDE';

$corborda  = "#033C5F";
$corlinha1 = "#D6DBDE";//"#D1C2C2";
$corlinha2 = "#E9F0F4";
$corlinha3 = "#FFFFFF";
$corlinha4 = "#D6DCE1";
$corlinha5 = "#D6E1E8";
$corlinha6 = "#000000";
$corlinha7 = "#294D91";
$corlinha8 = "#BDCCD5";

$corlinha  = "";

$corfontecabec = "#000000";
$corfontelinha = "#000000";
$CorTabLinha = "#FFFFFF";

$SecaoSubsecao_Array = array();
if($_SERVER['SERVER_NAME'] =="wwwdsv.trf1.gov.br")
$SecaoSubsecao_Array['JFDSV1'] = 'JFDSV1';

$SecaoSubsecao_Array['0100'] = 'TRF1';
$SecaoSubsecao_Array['100'] = 'TRF1';
$SecaoSubsecao_Array['3000'] = 'JFAC';
$SecaoSubsecao_Array['3100'] = 'JFAP';
$SecaoSubsecao_Array['3200'] = 'JFAM';
$SecaoSubsecao_Array['3201'] = 'TBT';
$SecaoSubsecao_Array['3300'] = 'JFBA';
$SecaoSubsecao_Array['3301'] = 'ILS';
$SecaoSubsecao_Array['3302'] = 'CFS';
$SecaoSubsecao_Array['3303'] = 'BES';
$SecaoSubsecao_Array['3304'] = 'FSA';
$SecaoSubsecao_Array['3305'] = 'JZR';
$SecaoSubsecao_Array['3306'] = 'PAF';
$SecaoSubsecao_Array['3307'] = 'VCA';
$SecaoSubsecao_Array['3308'] = 'JEE';
$SecaoSubsecao_Array['3309'] = 'GNB';
$SecaoSubsecao_Array['3310'] = 'EUS';
$SecaoSubsecao_Array['3311'] = 'ITB';
$SecaoSubsecao_Array['3400'] = 'JFDF';
$SecaoSubsecao_Array['3500'] = 'JFGO';
$SecaoSubsecao_Array['3501'] = 'LZA';
$SecaoSubsecao_Array['3502'] = 'ANS';
$SecaoSubsecao_Array['3503'] = 'RVD';
$SecaoSubsecao_Array['3504'] = 'ACG';
$SecaoSubsecao_Array['3600'] = 'JFMT';
$SecaoSubsecao_Array['3601'] = 'CCS';
$SecaoSubsecao_Array['3602'] = 'ROI';
$SecaoSubsecao_Array['3603'] = 'SNP';
$SecaoSubsecao_Array['3700'] = 'JFMA';
$SecaoSubsecao_Array['3701'] = 'ITZ';
$SecaoSubsecao_Array['3702'] = 'CXS';
$SecaoSubsecao_Array['3800'] = 'JFMG';
$SecaoSubsecao_Array['3801'] = 'JFO';
$SecaoSubsecao_Array['3802'] = 'UBE';
$SecaoSubsecao_Array['3803'] = 'UDI';
$SecaoSubsecao_Array['3804'] = 'PSS';
$SecaoSubsecao_Array['3805'] = 'SSP';
$SecaoSubsecao_Array['3806'] = 'PMS';
$SecaoSubsecao_Array['3807'] = 'MCL';
$SecaoSubsecao_Array['3808'] = 'LAV';
$SecaoSubsecao_Array['3809'] = 'VGA';
$SecaoSubsecao_Array['3810'] = 'PSA';
$SecaoSubsecao_Array['3811'] = 'DVL';
$SecaoSubsecao_Array['3812'] = 'SLA';
$SecaoSubsecao_Array['3813'] = 'GVS';
$SecaoSubsecao_Array['3814'] = 'IIG';
$SecaoSubsecao_Array['3815'] = 'SOE';
$SecaoSubsecao_Array['3900'] = 'JFPA';
$SecaoSubsecao_Array['3901'] = 'MBA';
$SecaoSubsecao_Array['3902'] = 'STM';
$SecaoSubsecao_Array['3903'] = 'ATM';
$SecaoSubsecao_Array['3904'] = 'CAH';
$SecaoSubsecao_Array['4000'] = 'JFPI';
$SecaoSubsecao_Array['4001'] = 'PCZ';
$SecaoSubsecao_Array['4100'] = 'JFRO';
$SecaoSubsecao_Array['4101'] = 'JIP';
$SecaoSubsecao_Array['4200'] = 'JFRR';
$SecaoSubsecao_Array['4300'] = 'JFTO';

$ArrayBancoPai['TBT']='JFAM';  
$ArrayBancoPai['ILS']='JFBA';  
$ArrayBancoPai['JZR']='JFBA';  
$ArrayBancoPai['CFS']='JFBA';  
$ArrayBancoPai['PAF']='JFBA';  
$ArrayBancoPai['JEE']='JFBA';  
$ArrayBancoPai['BES']='JFBA';  
$ArrayBancoPai['GNB']='JFBA';  
$ArrayBancoPai['VCA']='JFBA';  
$ArrayBancoPai['FSA']='JFBA';  
$ArrayBancoPai['ITB']='JFBA';  
$ArrayBancoPai['EUS']='JFBA';  
$ArrayBancoPai['RVD']='JFGO';  
$ArrayBancoPai['ACG']='JFGO';  
$ArrayBancoPai['ANS']='JFGO';  
$ArrayBancoPai['LZA']='JFGO';  
$ArrayBancoPai['ITZ']='JFMA';  
$ArrayBancoPai['CXS']='JFMA';  
$ArrayBancoPai['JFO']='JFMG';  
$ArrayBancoPai['UBE']='JFMG';  
$ArrayBancoPai['PSS']='JFMG';  
$ArrayBancoPai['IIG']='JFMG';  
$ArrayBancoPai['MCL']='JFMG';  
$ArrayBancoPai['GVS']='JFMG';  
$ArrayBancoPai['DVL']='JFMG';  
$ArrayBancoPai['PSA']='JFMG';  
$ArrayBancoPai['VGA']='JFMG';  
$ArrayBancoPai['SLA']='JFMG';  
$ArrayBancoPai['LAV']='JFMG';  
$ArrayBancoPai['SOE']='JFMG';  
$ArrayBancoPai['PMS']='JFMG';  
$ArrayBancoPai['SSP']='JFMG';  
$ArrayBancoPai['UDI']='JFMG';  
$ArrayBancoPai['CCS']='JFMT';  
$ArrayBancoPai['ROI']='JFMT';  
$ArrayBancoPai['SNO']='JFMT';  
$ArrayBancoPai['MBA']='JFPA';  
$ArrayBancoPai['CAH']='JFPA';  
$ArrayBancoPai['STM']='JFPA';  
$ArrayBancoPai['ATM']='JFPA';  
$ArrayBancoPai['PCZ']='JFPI';  
$ArrayBancoPai['JIP']='JFRO';  

$ArrayBancoPai['3201']='JFAM';                                     
$ArrayBancoPai['3301']='JFBA';                                     
$ArrayBancoPai['3305']='JFBA';                                     
$ArrayBancoPai['3302']='JFBA';                                     
$ArrayBancoPai['3306']='JFBA';                                     
$ArrayBancoPai['3308']='JFBA';                                     
$ArrayBancoPai['3303']='JFBA';                                     
$ArrayBancoPai['3309']='JFBA';                                     
$ArrayBancoPai['3307']='JFBA';                                     
$ArrayBancoPai['3304']='JFBA';                                     
$ArrayBancoPai['3311']='JFBA';                                     
$ArrayBancoPai['3310']='JFBA';                                     
$ArrayBancoPai['3503']='JFGO';                                     
$ArrayBancoPai['3504']='JFGO';                                     
$ArrayBancoPai['3502']='JFGO';                                     
$ArrayBancoPai['3501']='JFGO';                                     
$ArrayBancoPai['3701']='JFMA';                                     
$ArrayBancoPai['3702']='JFMA';                                     
$ArrayBancoPai['3801']='JFMG';                                     
$ArrayBancoPai['3802']='JFMG';                                     
$ArrayBancoPai['3804']='JFMG';                                     
$ArrayBancoPai['3814']='JFMG';                                     
$ArrayBancoPai['3807']='JFMG';                                     
$ArrayBancoPai['3813']='JFMG';                                     
$ArrayBancoPai['3811']='JFMG';                                     
$ArrayBancoPai['3810']='JFMG';                                     
$ArrayBancoPai['3809']='JFMG';                                     
$ArrayBancoPai['3812']='JFMG';                                     
$ArrayBancoPai['3808']='JFMG';                                     
$ArrayBancoPai['3815']='JFMG';                                     
$ArrayBancoPai['3806']='JFMG';                                     
$ArrayBancoPai['3805']='JFMG';                                     
$ArrayBancoPai['3803']='JFMG';                                     
$ArrayBancoPai['3601']='JFMT';                                     
$ArrayBancoPai['3602']='JFMT';                                     
$ArrayBancoPai['3603']='JFMT';                                     
$ArrayBancoPai['3901']='JFPA';                                     
$ArrayBancoPai['3904']='JFPA';                                     
$ArrayBancoPai['3902']='JFPA';                                     
$ArrayBancoPai['3903']='JFPA';                                     
$ArrayBancoPai['4001']='JFPI';                                     
$ArrayBancoPai['4101']='JFRO';


$ArrayUrlProcRedirect = array();
$ArrayUrlProcRedirect["AC"] = "http://processual-ac.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=AC";
$ArrayUrlProcRedirect["AP"] = "http://processual-ap.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=AP";
$ArrayUrlProcRedirect["AM"] = "http://processual-am.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=AM";
$ArrayUrlProcRedirect["TB"] = "http://processual-am.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=TB";
$ArrayUrlProcRedirect["TBT"] = "http://processual-am.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=TBT";

$ArrayUrlProcRedirect["BA"] = "http://processual-ba.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=BA";
$ArrayUrlProcRedirect["BES"] = "http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=BES";
$ArrayUrlProcRedirect["CFS"] = "http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=CFS";
$ArrayUrlProcRedirect["FSA"] = "http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=FSA";
$ArrayUrlProcRedirect["IL"] = "http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=IL";
$ArrayUrlProcRedirect["ILS"] = "http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=IL";
$ArrayUrlProcRedirect["JZR"] = "http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=JZR";
$ArrayUrlProcRedirect["PAF"] = "http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=PAF";
$ArrayUrlProcRedirect["VCA"] = "http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=VCA";
$ArrayUrlProcRedirect["JEE"] = "http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=JEE";
$ArrayUrlProcRedirect["GNB"] = "http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=GNB";
$ArrayUrlProcRedirect["EUS"] = "http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=EUS";
$ArrayUrlProcRedirect["ITB"] = "http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=ITB";

$ArrayUrlProcRedirect["DF"] = "http://processual-df.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=DF";
$ArrayUrlProcRedirect["GO"] = "http://processual-go.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=GO";
$ArrayUrlProcRedirect["ANS"] = "http://processual-go.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=ANS";
$ArrayUrlProcRedirect["LZA"] = "http://processual-go.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=LZA";
$ArrayUrlProcRedirect["ACG"] = "http://processual-go.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=ACG";
$ArrayUrlProcRedirect["RVD"] = "http://processual-go.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=RVD";

$ArrayUrlProcRedirect["MA"] = "http://processual-ma.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=MA";
$ArrayUrlProcRedirect["CX"] = "http://processual-ma.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=CX";
$ArrayUrlProcRedirect["CXS"] = "http://processual-ma.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=CXS";
$ArrayUrlProcRedirect["IM"] = "http://processual-ma.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=IM";
$ArrayUrlProcRedirect["ITZ"] = "http://processual-ma.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=ITZ";

$ArrayUrlProcRedirect["MT"] = "http://processual-mt.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=MT";
$ArrayUrlProcRedirect["CC"] = "http://processual-mt.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=CC";
$ArrayUrlProcRedirect["CCS"] = "http://processual-mt.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=CCS";
$ArrayUrlProcRedirect["ROI"] = "http://processual-mt.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=ROI";
$ArrayUrlProcRedirect["SNO"] = "http://processual-mt.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=SNO";

$ArrayUrlProcRedirect["MG"] = "http://processual-mg.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=MG";
$ArrayUrlProcRedirect["DVL"] = "http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=DVL";
$ArrayUrlProcRedirect["GVS"] = "http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=GVS";
$ArrayUrlProcRedirect["IIG"] = "http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=IIG";
$ArrayUrlProcRedirect["JF"] = "http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=JF";
$ArrayUrlProcRedirect["JFO"] = "http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=JFO";
$ArrayUrlProcRedirect["LAV"] = "http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=LAV";
$ArrayUrlProcRedirect["MCL"] = "http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=MCL";
$ArrayUrlProcRedirect["PS"] = "http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=PS";
$ArrayUrlProcRedirect["PSS"] = "http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=PSS";
$ArrayUrlProcRedirect["PT"] = "http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=PT";
$ArrayUrlProcRedirect["PMS"] = "http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=PMS";
$ArrayUrlProcRedirect["PSA"] = "http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=PSA";
$ArrayUrlProcRedirect["SS"] = "http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=SS";
$ArrayUrlProcRedirect["SSP"] = "http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=SSP";
$ArrayUrlProcRedirect["UB"] = "http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=UB";
$ArrayUrlProcRedirect["UBE"] = "http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=UBE";
$ArrayUrlProcRedirect["UD"] = "http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=UD";
$ArrayUrlProcRedirect["UDI"] = "http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=UDI";
$ArrayUrlProcRedirect["VGA"] = "http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=VGA";
$ArrayUrlProcRedirect["SLA"] = "http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=SLA";
$ArrayUrlProcRedirect["SOE"] = "http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=SOE";

$ArrayUrlProcRedirect["PA"] = "http://processual-pa.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=PA";
$ArrayUrlProcRedirect["ATM"] = "http://processual-pa.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=ATM";
$ArrayUrlProcRedirect["CAH"] = "http://processual-pa.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=CAH";
$ArrayUrlProcRedirect["MB"] = "http://processual-pa.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=MB";
$ArrayUrlProcRedirect["MBA"] = "http://processual-pa.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=MBA";
$ArrayUrlProcRedirect["ST"] = "http://processual-pa.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=ST";
$ArrayUrlProcRedirect["STM"] = "http://processual-pa.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=STM";

$ArrayUrlProcRedirect["PI"] = "http://processual-pi.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=PI";
$ArrayUrlProcRedirect["PCZ"] = "http://processual-pi.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=PCZ";

$ArrayUrlProcRedirect["RO"] = "http://processual-ro.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=RO";
$ArrayUrlProcRedirect["JIP"] = "http://processual-ro.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=JIP";

$ArrayUrlProcRedirect["RR"] = "http://processual-rr.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=RR";
$ArrayUrlProcRedirect["TO"] = "http://processual-to.trf1.gov.br/Processos/ProcessosSecaoOra/ConsProcSecaopro.php?SECAO=TO";

$ArrayUrlProcRedirectInicio = array();
while(list($key, $val) = each($ArrayUrlProcRedirect)){
	$ArrayUrlProcRedirectInicio[$key] = str_replace("ConsProcSecaopro.php","ConsProcSecaoPes.php",$val);
}

$vArrayUnidadesFederativas['AC']  = 'Acre';
$vArrayUnidadesFederativas['AL']  = 'Alagoas';
$vArrayUnidadesFederativas['AP']  = 'Amapá';
$vArrayUnidadesFederativas['AM']  = 'Amazonas';
$vArrayUnidadesFederativas['BA']  = 'Bahia';
$vArrayUnidadesFederativas['CE']  = 'Ceará';
$vArrayUnidadesFederativas['DF']  = 'Distrito Federal';
$vArrayUnidadesFederativas['ES']  = 'Espírito Santo';
$vArrayUnidadesFederativas['GO']  = 'Goiás';
$vArrayUnidadesFederativas['MA']  = 'Maranhão';
$vArrayUnidadesFederativas['MT']  = 'Mato Grosso';
$vArrayUnidadesFederativas['MS']  = 'Mato Grosso do Sul';
$vArrayUnidadesFederativas['MG']  = 'Minas Gerais';
$vArrayUnidadesFederativas['PA']  = 'Pará';
$vArrayUnidadesFederativas['PB']  = 'Paraíba';
$vArrayUnidadesFederativas['PR']  = 'Paraná';
$vArrayUnidadesFederativas['PE']  = 'Pernambuco';
$vArrayUnidadesFederativas['PI']  = 'Piauí';
$vArrayUnidadesFederativas['RJ']  = 'Rio de Janeiro';
$vArrayUnidadesFederativas['RN']  = 'Rio Grande do Norte';
$vArrayUnidadesFederativas['RS']  = 'Rio Grande do Sul';
$vArrayUnidadesFederativas['RO']  = 'Rondônia';
$vArrayUnidadesFederativas['RR']  = 'Roraima';
$vArrayUnidadesFederativas['SC']  = 'Santa Catarina';
$vArrayUnidadesFederativas['SP']  = 'São Paulo';
$vArrayUnidadesFederativas['SE']  = 'Sergipe';
$vArrayUnidadesFederativas['TO']  = 'Tocantins';

$vArrayRegioesNPrimeira['RJ']['nome']  			= 'Rio de Janeiro';
$vArrayRegioesNPrimeira['RJ']['codRegiao']  	= '0200';
$vArrayRegioesNPrimeira['RJ']['nomeRegiao']  	= '2ª Região';

$vArrayRegioesNPrimeira['ES']['nome']  			= 'Espírito Santo';
$vArrayRegioesNPrimeira['ES']['codRegiao']  	= '0200';
$vArrayRegioesNPrimeira['ES']['nomeRegiao']  	= '2ª Região';

$vArrayRegioesNPrimeira['SP']['nome']  			= 'São Paulo';
$vArrayRegioesNPrimeira['SP']['codRegiao']  	= '0300';
$vArrayRegioesNPrimeira['SP']['nomeRegiao']  	= '3ª Região';

$vArrayRegioesNPrimeira['MS']['nome']  			= 'Mato Grosso do Sul';
$vArrayRegioesNPrimeira['MS']['codRegiao']  	= '0300';
$vArrayRegioesNPrimeira['MS']['nomeRegiao']  	= '3ª Região';

$vArrayRegioesNPrimeira['PR']['nome']  			= 'Paraná';
$vArrayRegioesNPrimeira['PR']['codRegiao']  	= '0400';
$vArrayRegioesNPrimeira['PR']['nomeRegiao']  	= '4ª Região';

$vArrayRegioesNPrimeira['SC']['nome']  			= 'Santa Catarina';
$vArrayRegioesNPrimeira['SC']['codRegiao']  	= '0400';
$vArrayRegioesNPrimeira['SC']['nomeRegiao']  	= '4ª Região';

$vArrayRegioesNPrimeira['RS']['nome']  			= 'Rio Grande do Sul';
$vArrayRegioesNPrimeira['RS']['codRegiao']  	= '0400';
$vArrayRegioesNPrimeira['RS']['nomeRegiao']  	= '4ª Região';

$vArrayRegioesNPrimeira['AL']['nome']  			= 'Alagoas';
$vArrayRegioesNPrimeira['AL']['codRegiao']  	= '0500';
$vArrayRegioesNPrimeira['AL']['nomeRegiao']  	= '5ª Região';

$vArrayRegioesNPrimeira['CE']['nome']  			= 'Ceará';
$vArrayRegioesNPrimeira['CE']['codRegiao']  	= '0500';
$vArrayRegioesNPrimeira['CE']['nomeRegiao']  	= '5ª Região';

$vArrayRegioesNPrimeira['PB']['nome']  			= 'Paraíba';
$vArrayRegioesNPrimeira['PB']['codRegiao']  	= '0500';
$vArrayRegioesNPrimeira['PB']['nomeRegiao']  	= '5ª Região';

$vArrayRegioesNPrimeira['PE']['nome']  			= 'Pernambuco';
$vArrayRegioesNPrimeira['PE']['codRegiao']  	= '0500';
$vArrayRegioesNPrimeira['PE']['nomeRegiao']  	= '5ª Região';

$vArrayRegioesNPrimeira['RN']['nome']  			= 'Rio Grande do Norte';
$vArrayRegioesNPrimeira['RN']['codRegiao']  	= '0500';
$vArrayRegioesNPrimeira['RN']['nomeRegiao']  	= '5ª Região';

$vArrayRegioesNPrimeira['SE']['nome']  			= 'Sergipe';
$vArrayRegioesNPrimeira['SE']['codRegiao']  	= '0500';
$vArrayRegioesNPrimeira['SE']['nomeRegiao']  	= '5ª Região';

# Url para montar a consulta processual na internet
$ArrayUrlConsProces['TRF1'] = 'http://www.trf1.jus.br/Processos/ProcessosTRF/ctrf1proc/ctrf1proc.php?SECAO=TRF1';
$ArrayUrlConsProces['AC'] = 'http://processual-ac.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=AC';
$ArrayUrlConsProces['AP'] = 'http://processual-ap.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=AP';
$ArrayUrlConsProces['AM'] = 'http://processual-am.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=AM';
$ArrayUrlConsProces['TB'] = 'http://processual-am.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=TB';

$ArrayUrlConsProces['BA'] = 'http://processual-ba.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=BA';
$ArrayUrlConsProces['BES'] = 'http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=BES';
$ArrayUrlConsProces['CFS'] = 'http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=CFS';
$ArrayUrlConsProces['FSA'] = 'http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=FSA';
$ArrayUrlConsProces['IL'] = 'http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=IL';
$ArrayUrlConsProces['JZR'] = 'http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=JZR';
$ArrayUrlConsProces['PAF'] = 'http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=PAF';
$ArrayUrlConsProces['VCA'] = 'http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=VCA';
$ArrayUrlConsProces['JEE'] = 'http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=JEE';
$ArrayUrlConsProces['GNB'] = 'http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=GNB';
$ArrayUrlConsProces['EUS'] = 'http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=EUS';
$ArrayUrlConsProces['ITB'] = 'http://processual-ba2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=ITB';

$ArrayUrlConsProces['DF'] = 'http://processual-df.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=DF';
$ArrayUrlConsProces['GO'] = 'http://processual-go.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=GO';
$ArrayUrlConsProces['ANS'] = 'http://processual-go.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=ANS';
$ArrayUrlConsProces['LZA'] = 'http://processual-go.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=LZA';
$ArrayUrlConsProces['ACG'] = 'http://processual-go.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=ACG';
$ArrayUrlConsProces['RVD'] = 'http://processual-go.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=RVD';

$ArrayUrlConsProces['MA'] = 'http://processual-ma.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=MA';
$ArrayUrlConsProces['CX'] = 'http://processual-ma.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=CX';
$ArrayUrlConsProces['CXS'] = 'http://processual-ma.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=CX';
$ArrayUrlConsProces['IM'] = 'http://processual-ma.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=IM';

$ArrayUrlConsProces['MT'] = 'http://processual-mt.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=MT';
$ArrayUrlConsProces['CC'] = 'http://processual-mt.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=CC';
$ArrayUrlConsProces['CCS'] = 'http://processual-mt.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=CCS';
$ArrayUrlConsProces['ROI'] = 'http://processual-mt.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=ROI';
$ArrayUrlConsProces['SNO'] = 'http://processual-mt.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=SNO';

$ArrayUrlConsProces['MG'] = 'http://processual-mg.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=MG';
$ArrayUrlConsProces['DVL'] = 'http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=DVL';
$ArrayUrlConsProces['GVS'] = 'http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=GVS';
$ArrayUrlConsProces['IIG'] = 'http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=IIG';
$ArrayUrlConsProces['JF'] = 'http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=JF';
$ArrayUrlConsProces['LAV'] = 'http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=LAV';
$ArrayUrlConsProces['MCL'] = 'http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=MCL';
$ArrayUrlConsProces['PS'] = 'http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=PS';
$ArrayUrlConsProces['PSS'] = 'http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=PSS';
$ArrayUrlConsProces['PT'] = 'http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=PT';
$ArrayUrlConsProces['PMS'] = 'http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=PT';
$ArrayUrlConsProces['PSA'] = 'http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=PSA';
$ArrayUrlConsProces['SS'] = 'http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=SS';
$ArrayUrlConsProces['SSP'] = 'http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=SSP';
$ArrayUrlConsProces['UB'] = 'http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=UB';
$ArrayUrlConsProces['UD'] = 'http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=UD';
$ArrayUrlConsProces['VGA'] = 'http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=VGA';
$ArrayUrlConsProces['SLA'] = 'http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=SLA';
$ArrayUrlConsProces['SOE'] = 'http://processual-mg2.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=SOE';

$ArrayUrlConsProces['PA'] = 'http://processual-pa.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=PA';
$ArrayUrlConsProces['ATM'] = 'http://processual-pa.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=ATM';
$ArrayUrlConsProces['CAH'] = 'http://processual-pa.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=CAH';
$ArrayUrlConsProces['MB'] = 'http://processual-pa.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=MB';
$ArrayUrlConsProces['ST'] = 'http://processual-pa.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=ST';

$ArrayUrlConsProces['PI'] = 'http://processual-pi.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=PI';
$ArrayUrlConsProces['PCZ'] = 'http://processual-pi.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=PCZ';

$ArrayUrlConsProces['RO'] = 'http://processual-ro.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=RO';
$ArrayUrlConsProces['JIP'] = 'http://processual-ro.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=JIP';

$ArrayUrlConsProces['RR'] = 'http://processual-rr.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=RR';
$ArrayUrlConsProces['TO'] = 'http://processual-to.trf1.gov.br/Processos/ProcessosSecaoOra/default.php?SECAO=TO';



$ArraySecoesLentas = array("AP","3100","JFAP"  ,"RO","4100","JFRO"   ,"RR","4200","JFRR"  ,"PI","4000","JFPI"  ,"AC","3000","JFAC");

$ArraySecaoBcoDsv = array(
	"3300" 		=> "JFDSV1",
	"3400" 		=> "JFDSV2",
	"3800" 		=> "JFDSV3",
	"JFDSV3" 	=> "JFDSV3",
	"JFDSV1" 	=> "JFDSV1",
	"TRF1" 		=> "JFDSV1",
	"1000" 		=> "JFDSV1",
	"100" 		=> "JFDSV1",
	"JFDSV"		=> "JFDSV",
	"TRF1DSV"	=> "TRF1DSV"
);

$AplicationTypesGefi = array(
	'doc'  => 'application/msword'			, 	'DOC'   => 'application/msword',
	'pdf'  => 'application/pdf'				,	'PDF'   => 'application/pdf',
	'xls'  => 'application/vnd.ms-excel'	,	'XLS'   => 'application/vnd.ms-excel',
	'bmp'  => 'image/bmp'					,   'BMP'   => 'image/bmp',
	'gif'  => 'image/gif'					,   'GIF'   => 'image/gif',
	'jpeg' => 'image/jpeg'					,   'JPEG'  => 'image/jpeg',
	'jpg'  => 'image/jpeg'					,   'JPG'   => 'image/jpeg',
	'jpe'  => 'image/jpeg'					,   'JPE'   => 'image/jpeg',
	'png'  => 'image/png'					,   'PNG'   => 'image/png',
	'rtf'  => 'text/rtf'					,   'RTF'   => 'text/rtf' ,
	'txt'  => 'text/plain'					,   'TXT'   => 'text/plain' ,
	'indd' => 'application/x-indesign'		, 	'INDD'  => 'application/x-indesign',
	'ppt'  => 'application/vnd.ms-powerpoint',	'PPT'   => 'application/vnd.ms-powerpoint',
	'zip'  => 'application/zip'				,	'PPT'   => 'application/zip',
	'png'  => 'image/png'					,	'PNG'   => 'image/png',
	'tif'  => 'image/tiff'					,	'TIF'   => 'image/tiff',
	'tiff' => 'image/tiff'					,	'TIFF'  => 'image/tiff',
	'mp3'  => 'audio/mp3'					,	'MP3'  => 'audio/mp3'
);
$OperadorOracleInterMedia = array (	"=" => "EQUIV", ";" => "NEAR", "*"        => "*"     , ">" => ">",
							 		"-" => "MINUS", "~" => "NOT" , " WITHIN " => "WITHIN",
							 		"&" => "AND"  , "|" => "OR"  , " ; "      => "ACCUM");
$arraydiafimmes = array(
					'01' => '31', '02' => '29',	'03' => '31', '04' => '30',
					'05' => '31', '06' => '30', '07' => '31', '08' => '31',
					'09' => '30', '10' => '31', '11' => '30', '12' => '31'
					);

$IvIntranet = false;
if(!($_SERVER['REMOTE_ADDR']=='172.16.3.10' || $_SERVER['REMOTE_ADDR']=='172.16.3.11' || $_SERVER['REMOTE_ADDR']=='172.16.3.12'))
	$IvIntranet = true;
function MontaOabDezDig($OabEnv){
	$OabEnv = str_replace(".","",$OabEnv);
	$OabEnv = str_replace("-","",$OabEnv);
	$OabEnv = str_replace(",","",$OabEnv);
	$OabEnv = str_replace(" ","",$OabEnv);
	$Tam = strlen($OabEnv);
	$inic = substr($OabEnv,0,2);
	$fim  = substr($OabEnv,2);
	$meio = $fim;
	$TempOab = "";	
	for($x=strlen($meio);$x<8;$x++){
		if(strlen($inic . $meio)>=10) break;
		$meio = "0" . $meio;
	}
	$TempOab = $inic . $meio;
	return $TempOab;
}	
function AcessoIntranet(){
	if(($_SERVER['SERVER_NAME'] =="intranet.trf1.jus.br")||($_SERVER['SERVER_NAME'] =="intranet.trf1.gov.br")){
		return true;
	}
	else{
		if(!( ($_SERVER['REMOTE_ADDR']=='172.16.3.10') || ($_SERVER['REMOTE_ADDR']=='172.16.3.11') || ($_SERVER['REMOTE_ADDR']=='172.16.3.12') )){
			return true;
		}	
		else{ 
			return false;
		}
	}
}
function LimpaUserSessao()
{
	session_unset();
	global $HTTP_SESSION_VARS; 
	foreach ($HTTP_SESSION_VARS as $key => $value) { 
		session_unregister($key);
	}
	# força o fim da sessão 
	@session_destroy(); 
}
function UsuariOIntranet(){
	global $IvIntranet;
	if(((session_is_registered('Sistema')))&&($IvIntranet ))
		return true;
	else
		return false;
}
$VarBiblioMascaraData = "DD/MM/YYYY HH24:MI:SS";

function VerTipoPermitidoArquivo($nomeP){
	$ArrayExtens = array(
		'.doc','.zip','.pdf','.jpg','.gif','.tif','.tiff','.rar','.xls','.rtf','.wpd','.ppt','.wpf'
	);
	//'.php','.asp','.js','.cgi'
	$TipoArquiInv=false;
	for($Ij=0;$Ij<sizeof($ArrayExtens);$Ij++){
		$TipoArqui = strpos(strtolower($nomeP),$ArrayExtens[$Ij]);
		if(!($TipoArqui===false)){
			$TipoArquiInv=true;break;
		}
	}
	return $TipoArquiInv;
}
function ProcessoJef($proc,$SECAO){
	$QuerySistema = "
	SELECT
	COUNT(OCJ_FSPR.FSPR_ID_FSPR_PRINCIPAL) QT_ID_PROC
	FROM 
	OCJ_NUMP_NUMERACAO_PROCESSO OCJ_NUMP,
	OCJ_FSPR_FASE_PROCESSO OCJ_FSPR
	WHERE 
	OCJ_NUMP.NUMP_ID=OCJ_FSPR.FSPR_ID_NUMP AND
	(
		(OCJ_NUMP.NUMP_NR_PROC_TRF=:processo) OR
		(OCJ_NUMP.NUMP_NR_PROC_RESOL_CNJ=:processo)
	)AND
	OCJ_FSPR.FSPR_NM_SISTEMA='JEFVIRTUAL'	
	";
	$cursorSistema = ExecutaQueryTweb($QuerySistema,$SECAO,":processo",$proc);
	$nrowsSistema = OCIFetchStatement($cursorSistema,$resultsSistema);
	$ProcessoJef = $resultsSistema['QT_ID_PROC'][0];
	if($ProcessoJef>0)	return true;
	else return false;	
}
function ConsultaDadosProcesso($proc,$SECAO){
	$QuerySistema = " SELECT
	OCJ_NUMP.NUMP_NR_PROC_RESOL_CNJ PROCCNJ,
    OCJ_NUMP.NUMP_NR_PROC_TRF PROCTRF, 
    OCJ_NUMP.NUMP_ID NUMPID, 
    OCJ_FSPR.FSPR_ID_FSPR_PRINCIPAL PROCID, 
    OCJ_FSPR.FSPR_NM_SISTEMA NOMESISTEMA,
	OCJ_FSPR.FSPR_IC_PROCESSO_DIGITAL DIGITAL,
    OCJ_NUMP.NUMP_CD_SECSUBSEC CODSECAO
	FROM 
	OCJ_NUMP_NUMERACAO_PROCESSO OCJ_NUMP,
	OCJ_FSPR_FASE_PROCESSO OCJ_FSPR
	WHERE 
	OCJ_NUMP.NUMP_ID=OCJ_FSPR.FSPR_ID_NUMP AND
	(
		(OCJ_NUMP.NUMP_NR_PROC_TRF=:processo) OR
		(OCJ_NUMP.NUMP_NR_PROC_RESOL_CNJ=:processo)
	)
	";
	$cursorSistema = ExecutaQueryTweb($QuerySistema,$SECAO,":processo",$proc);
	$nrowsSistema = OCIFetchStatement($cursorSistema,$resultsSistema);
	if($nrowsSistema>0){
		$ProcessoDados = array(
			'PROCCNJ' 		=> $resultsSistema['PROCCNJ'][0],
			'PROCTRF' 		=> $resultsSistema['PROCTRF'][0],
			'NUMPID' 		=> $resultsSistema['NUMPID'][0],
			'PROCID' 		=> $resultsSistema['PROCID'][0],
			'NOMESISTEMA' 	=> $resultsSistema['NOMESISTEMA'][0],
			'DIGITAL' 		=> $resultsSistema['DIGITAL'][0],
			'CODSECAO' 		=> $resultsSistema['CODSECAO'][0]
		);
		return $ProcessoDados;
	}
	else{
		return '';
	}
}
function VerTipoDocsRedLiberados($NumTipoDoc){
	$ArrayTipoLiberados = array(
		'1'    #  Acórdão
		,'32'  #  Decisão
		,'33'  #  Decisão Antecipação de tutela
		,'34'  #  Decisão Interlocutória
		,'35'  #  Decisao Terminativa
		,'39'  #  Despachos
		,'136' #  Decisão Liminar
		,'144' #  Decisão Agravada
		,'145' #  Decisão do Juízo Suscitado
		,'146' #  Decisão do Juízo Suscitante
		,'147' #  Decisão Denegatória de RE / REsp
		,'71'  #  Execução/Cumprimento de Sentença
		,'78'  #  Impugnação ao cumprimento de sentença
		,'120' #  Recurso de Sentença(JEF)
		,'128' #  Sentença
	);
	$Liberado = false;
	if(in_array($NumTipoDoc, $ArrayTipoLiberados, true)){
		$Liberado = true;
	}
	return $Liberado;
}
function VerTipoDocsPjdLiberados($NumTipoDoc){
	$ArrayTipoLiberadosPjd = array(
          '221' 	#  Acórdão
         ,'179' #  Sentença
         ,'100' #  Decisão
         ,'68' 	#  Despacho
		
	);
	$LiberadoPjd = false;
	if(in_array($NumTipoDoc, $ArrayTipoLiberadosPjd, true)){
		$LiberadoPjd = true;
	}
	return $LiberadoPjd;
}
function BuscaDadosProcesso($proc,$SECAO){
	$QuerySistema = "
	SELECT /*+ ORDERED USE_NL(OCJ_NUMP OCJ_FSPR) */
	OCJ_NUMP.NUMP_NR_PROC_TRF NUMEROANTIGO,
	TO_CHAR(OCJ_NUMP.NUMP_NR_PROC_RESOL_CNJ) NUMERONOVO,
	OCJ_FSPR.FSPR_ID PROCID,
	OCJ_NUMP.NUMP_ID NUMPID
	FROM 
	OCJ_NUMP_NUMERACAO_PROCESSO OCJ_NUMP,
	OCJ_FSPR_FASE_PROCESSO OCJ_FSPR 
	WHERE 
	OCJ_NUMP.NUMP_ID=OCJ_FSPR.FSPR_ID_NUMP AND
	(
		(OCJ_NUMP.NUMP_NR_PROC_TRF=:processo) OR
		(OCJ_NUMP.NUMP_NR_PROC_RESOL_CNJ=:processo)
	)
	";
	//echo "<!--\n intra - " . str_replace(":processo",$proc,$QuerySistema) . "\n-->";
	$cursorSistema = ExecutaQueryTweb($QuerySistema,$SECAO,":processo",$proc,":secao",ExemploProc($SECAO,5));
	$nrowsSistema = OCIFetchStatement($cursorSistema,$resultsSistema);
	if($nrowsSistema>0){
		$Retorno = array(
			'NumeroAntigo' 	=> $resultsSistema['NUMEROANTIGO'][0],
			'NumeroNovo' 	=> $resultsSistema['NUMERONOVO'][0],
			'ProcId' 		=> $resultsSistema['PROCID'][0],
			'NumpId'		=> $resultsSistema['NUMPID'][0]
		);
		//print_r($Retorno);exit;
		return $Retorno;
	}
	else{
		return "";
	}
}
function BuscaUltimasOcorrencias($EntidadeBo="1000112000000"){//1000100000000
	global $conexao;
	$sql=
	"SELECT PUOF_PUBL_OFICIAL.* FROM ("
		."SELECT PUOF_PUBL_OFICIAL.* "
		.", ROWNUM as RNum  "
		."FROM ("
		."SELECT "
		."PUOF_PUBL_OFICIAL.PUOF_COD_ENTIDADE,"
		."PUOF_PUBL_OFICIAL.PUOF_COD_PUBL,"
		."PUOF_PUBL_OFICIAL.PUOF_COD_TIPO_PUBL,"
		."PUOF_TIPO_PUBL.TIPU_DES_PUBL,"
		."PUOF_PUBL_OFICIAL.PUOF_NUM_PUBL,"
		."to_char(PUOF_PUBL_OFICIAL.PUOF_DT_PUBL,'dd/mm/yyyy') PUOF_DT_PUBL_F,"
		."to_char(PUOF_PUBL_OFICIAL.PUOF_DTHR_INS,'yyyymmdd') PUOF_DT_INSER_F,"
		."PUOF_PUBL_OFICIAL.PUOF_COD_ORGAO,"
		."PUOF_ORGAO_ORIGEM.OROR_DES_ORGAO,"
		."ORPU_SIGLA_ADMIN,"
		."PUOF_PUBL_OFICIAL.PUOF_DES_PUBL ,PUOF_TIP_TOMO,"
		."DBMS_LOB.GETLENGTH(PUOF_TXT_PUBL) TAMARQUIVO, "
		."PUOF_PUBL_OFICIAL.PUOF_FLG_WWW , MAOR_DESC_ORGAO,PUOF_SEQ_TIPO_PUBL,PUOF_DT_PUBL,ORPU_CODI_SECAO  "
		."FROM  "
		."TRFWEB.PUOF_ORGAO_PUBL,TRFWEB.PUOF_PUBL_OFICIAL , "
		."TRFWEB.PUOF_TIPO_PUBL,TRFWEB.PUOF_ORGAO_ORIGEM,SIREC.MA_ORGAO "
		.""
		."WHERE "
		."PUOF_PUBL_OFICIAL.PUOF_COD_TIPO_PUBL=PUOF_TIPO_PUBL.TIPU_COD_PUBL and TIPU_COD_PUBL = 217 AND "
		."PUOF_PUBL_OFICIAL.PUOF_COD_ORGAO=PUOF_ORGAO_ORIGEM.OROR_COD_ORGAO and "
		."PUOF_PUBL_OFICIAL.PUOF_COD_TIPO_PUBL=PUOF_ORGAO_PUBL.ORPU_COD_PUBL and "
		."PUOF_PUBL_OFICIAL.PUOF_COD_ORGAO = PUOF_ORGAO_PUBL.ORPU_COD_ORGAO and "
		."PUOF_PUBL_OFICIAL.PUOF_COD_ENTIDADE = MA_ORGAO.MAOR_COD_ORGAO AND "
		."PUOF_ORGAO_PUBL.ORPU_COD_ENTIDADE  = PUOF_PUBL_OFICIAL.PUOF_COD_ENTIDADE AND "
		."PUOF_ORGAO_PUBL.ORPU_COD_ENTIDADE  = :EntidadeBo  ORDER BY PUOF_PUBL_OFICIAL.PUOF_DT_PUBL DESC"
	.")
	PUOF_PUBL_OFICIAL
	) PUOF_PUBL_OFICIAL WHERE RNum BETWEEN 1 AND 6 ORDER BY PUOF_PUBL_OFICIAL.PUOF_DT_PUBL DESC, PUOF_NUM_PUBL desc " ;
	//echo "<!--\n" . str_replace(":EntidadeBo",$EntidadeBo,$sql) . "\n-->";
	$stmt = ExecutaQueryIntraWeb($sql,"TRF1",":EntidadeBo",$EntidadeBo);
	$Nrowns = @OCIFetchStatement($stmt,$results);
	if($Nrowns>0)
		return $results;
	else
		return "";
}

function BuscaNomeOrgaoDiario($CODBUSCA){
	$select_vara_secao=""
	."
	SELECT EDJ_ORG_SIGLA AS ORG_DESC
	FROM EDJF1_ORGAOS
	WHERE EDJ_ORG_COD = :CODBUSCA
	";
	//echo "<!--\n" . $select_vara_secao . "\n-->";
	$cursor = ExecutaQueryIntraWeb($select_vara_secao,"TRF1",":CODBUSCA",$CODBUSCA);
	$nrows = @OCIFetchStatement($cursor,$resultado);
	if($nrows>0){
		return $resultado['ORG_DESC'][0];;
	}
	else
		return "";
}
function BuscaTipoArquivoDiario($CODBUSCA){
	$select_tipo=""
	."
		SELECT
		EDJ_MAT_COD,EDJ_MAT_DESCRICAO,EDJ_MAT_SIGLA,EDJ_MAT_ORDEM
		FROM EDJF1_MATERIAS WHERE EDJ_MAT_COD = :CODBUSCA
	";
	//echo "<!--\n" . $select_vara_secao . "\n-->";
	$cursor = ExecutaQueryIntraWeb($select_tipo,"TRF1",":CODBUSCA",$CODBUSCA);
	$nrows = @OCIFetchStatement($cursor,$resultado);
	if($nrows>0){
		return $resultado['EDJ_MAT_SIGLA'][0] . "" . $resultado['EDJ_MAT_DESCRICAO'][0];
	}
	else
		return "";
}
function BuscaNoArrayDiario($procura) {
	$VarArrayUf = array('4100','0100','3800','4000','3400','3000','3100','3200','3300','3700','3600','3900','4200','4300','3500');
	foreach ($VarArrayUf as $v) {
		if ($procura == $v) return true;
	}
	return false;
}
function BuscaNoArrayaFolha($procura) {
	$VarArrayUf = array('JFDF','JFAC','JFAM','JFAP','JFTO','JFRO','JFPI','JFMA','JFRR','JFGO','JFMT','JFPA','JFMG','JFBA');
	foreach ($VarArrayUf as $v) {
		if ($procura == $v) return true;
	}
	return false;
}
function CorLinhaTabelaPub($ParamCorInt,$LinhaDoc,$corlinha3,$corlinha5){
	if(isset($ParamCorInt)&&(@trim($ParamCorInt)!="")){
		$LinhaDoc = ($LinhaDoc == $corlinha5)?$corlinha3:$corlinha5;
		return $LinhaDoc;
	}
	else return "";
}

function BuscaLegislacaoJurisprudencia(){
	$SqlJurisp = "
	SELECT SIGLA,DESCRICAO,FLAG FROM \n
	(
		SELECT NORMA_COD AS SIGLA, NORMA_DESCR AS DESCRICAO, '1' as FLAG FROM SETORIAL.NORMAS_LEGISLATIVAS \n
	) \n
	union \n
	( \n
		SELECT SJ_SIGLA AS SIGLA, SJ_DESCRICAO AS DESCRICAO, '2' as FLAG FROM SETORIAL.SIGLAS_JUDICIARIAS \n
	) \n
	ORDER BY 2 \n
	\n";
	$cursor = ExecutaQuery($SqlJurisp,"TRF1");// OCIParse ($conexao, $SqlBoletim);
	$exe = @OCIExecute ($cursor);
	$n_linhas = OCIFetchStatement($cursor,$linha);
	# Declara variáveis necessárias para abrir o arquivo do tipo PDF
	$VarErros = "";
	if($n_linhas>0){
		return $linha;
		/*
		$SIGLA 			= $linha["SIGLA"] ;
		$DESCRICAO  	= $linha["DESCRICAO"] ;
		$FLAG 			= $linha["FLAG"] ;
		*/
	}
	else
		return "";
	@ocifreecursor($cursor);
}
function ParametroOraNw($Vlr){
   if((isset($Vlr))&&(trim(@$Vlr)!="")){
		return "" . $Vlr . "";
   }
   else{
		return "";
   }
}
function ParametroOra($Vlr){
	/*if(is_array($Vlr)){
		print_r($Vlr);
		exit;
	}
   if($Vlr=="0")
	 $Vlr="";*/
   if((isset($Vlr))&&(trim(@$Vlr)!="")){
		return "'" . $Vlr . "'";
   }
   else{
		return "NULL";
   }
}
function SetaParametroNull($Vlr){
   if((isset($Vlr))&&(trim(@$Vlr)!="")){
		return  $Vlr;
   }
   else{
		return NULL;
   }
}
function NmDesembargador($nm=""){
	if(VerificaVariavel($nm)){
		$nm=str_replace("DESEMBARGADORA","DES.", strtoupper($nm));
		$nm=str_replace("DESEMBARGADOR","DES.", strtoupper($nm));
		$nm=str_replace("DESEMBARGADOR","DES.", strtoupper($nm));
	}
	return $nm;
}
function ReduzNomeTurma($NomeTurma=""){
	$ArrayNomeSecaoSai 		= array("PRIMEIRA","SEGUNDA", "TERCEIRA","QUARTA","QUINTA","SEXTA","SÉTIMA","OITAVA","NONA", "DECIMA");
	$ArrayNomeSecaoSubst  	= array("1ª",		"2ª",	   "3ª",	  "4ª",	   "5ª",    "6ª",   "7ª",    "8ª",   "9ª",   "10ª");
	return str_replace($ArrayNomeSecaoSai, $ArrayNomeSecaoSubst, $NomeTurma);
}
function PaginaConstrucao(){
	global $corlinha2;
	echo "<center><strong><font face=verdana size=3>Tribunal Regional Federal da 1ª Região</font></strong></center>
			<script language=\"javascript\"> \r\n
			function imprime_barra8Constr(){\r\n
				layout_barra = '<center><table cellpadding=0 cellspacing=0 width=100%><tr><td nowrap><img src=/Layout/trf1_bar8_inicio.gif height=10 width=4><img src=/Layout/trf1_bar8.gif height=10 width=99%><img src=/Layout/trf1_bar8_fim.gif height=10 width=4></td></tr></table></center>';\r\n
				document.write (layout_barra);\r\n
			}\r\n
			imprime_barra8Constr();</script><br>\r\n
			<TABLE align=center BORDER=1 width=90% CELLSPACING=0 CELLPADDING=0 >\r\n
			<tr><td valign=top bgcolor=$corlinha2 align=center ><br><br><font size=6>\r\n
			Página em construção !<br><br>\r\n
		  </td></tr></table>\n<br>\r\n
		  <script>imprime_barra8Constr();</script><br>\r\n
		  ";
}
function BbVerificaMascaraData($dtdia="",$dtmes="",$dtano=""){
	$pesdtini = "";
	$pesdtfim = "";
	if($dtdia=="nada")
		$dtdia = "";
	if($dtmes=="nada")
		$dtmes = "";
	if(($dtano=="nada")||($dtano=="Ano"))
		$dtano = "";
	$fimmes = array(	'01' => '31', '02' => '29',	'03' => '31', '04' => '30',
						'05' => '31', '06' => '30', '07' => '31', '08' => '31',
						'09' => '30', '10' => '31', '11' => '30', '12' => '31'
						);
	if((VerificaVariavel($dtmes))&&VerificaVariavel($dtdia)&&VerificaVariavel($dtano)){
		//echo "<!-- ".($fimmes[$dtmes]*1)." < " .($dtdia*1) ." == " . $dtmes  ." = ". $dtano . " 8888  -->";
		if(($fimmes[$dtmes]*1)<=($dtdia*1)){
			if(($dtmes=="02"||$dtmes=="2")){
				if((@$dtano%4)==0){
					$dtdia = $fimmes[$dtmes];
				}
				else{
					$dtdia = $fimmes[$dtmes]-1;
				}
			}
			else
				$dtdia = $fimmes[$dtmes];
		}
	}
	$mascaradt='dd/mm/yyyy';
	$GLOBALS["BbMascaraDataAtual"]		= $mascaradt . " HH24:MI:SS";
	$datacompleta           			= date("d/m/Y");
	$datacompleta 						= explode("/",$datacompleta);
	$dia                    			= $datacompleta[0];
	$mes                    			= $datacompleta[1];
	$ano                    			= $datacompleta[2];
	$GLOBALS["BbMascaraDataAtual"]		= "";
	$GLOBALS["BbBbDataInicioAtual"]		= "";
	$GLOBALS["BbDatafimAtual"]			= "";
	if ((VerificaVariavel($dtdia))||(VerificaVariavel($dtmes))||(VerificaVariavel($dtano)))
	{
		if((VerificaVariavel($dtdia))&&(!VerificaVariavel($dtmes))&&(!VerificaVariavel($dtano)))
		{
			//$mascaradt='dd';
			if(($fimmes[$mes]<=$dtdia)||($mes=="02"||$mes=="2"))
				if(($mes=="02"||$mes=="2"))
					if(($ano%4)==0)
						$dtdia = $fimmes[$mes];
					else
						$dtdia = $fimmes[$mes]-1;
				else
					$dtdia = $fimmes[$mes];
			$pesdtini=$dtdia . "/" . $mes . "/" . $ano;
			$pesdtfim=$dtdia . "/" . $mes . "/" . $ano;
		}
		if((VerificaVariavel($dtmes))&&(!VerificaVariavel($dtano)))
		{
			if(!VerificaVariavel($dtdia))
			{
				//$mascaradt='mm';
				if(($dtmes=="02"||$dtmes=="2")){
					if((@$ano%4)==0)
						$dtdiat = $fimmes[$dtmes];
					else
						$dtdiat = $fimmes[$dtmes]-1;
				}
				else
					$dtdiat = $fimmes[$dtmes];
				$pesdtini= "01/" . $dtmes . "/" . $ano;
				$pesdtfim= $dtdiat. "/" . $dtmes . "/" . $ano;
			}
			else
			{
				//$mascaradt='dd/mm';
				if(($fimmes[$mes]<=$dtdia)||($dtmes=="02"||$dtmes=="2"))
					if(($dtmes=="02"||$dtmes=="2"))
						if(($ano%4)==0)
							$dtdia = $fimmes[$dtmes];
						else
							$dtdia = $fimmes[$dtmes]-1;
					else
						$dtdia = $fimmes[$dtmes];
				$pesdtini=$dtdia."/".$dtmes."/".$ano;
				$pesdtfim=$dtdia."/".$dtmes."/".$ano;
			}
		}
		if(VerificaVariavel($dtano))
		{
			if((!VerificaVariavel($dtdia))&&(!VerificaVariavel($dtmes)))
			{
				//$mascaradt='yyyy';
				$pesdtini="01/01/" .$dtano;
				$pesdtfim="31/12/" .$dtano;
			}
			if((!VerificaVariavel($dtdia))&&(VerificaVariavel($dtmes)))
			{
				//$mascaradt='mm/yyyy';
				if(($dtmes=="02"||$dtmes=="2")){
					if((@$dtano%4)==0)
						$dtdiat = $fimmes[$dtmes];
					else
						$dtdiat = $fimmes[$dtmes]-1;
				}
				else
					$dtdiat = $fimmes[$dtmes];

				$pesdtini="01/" . $dtmes."/".$dtano;
				$pesdtfim=$dtdiat. "/" . $dtmes."/".$dtano;
			}
			if((!VerificaVariavel($dtmes))&&(VerificaVariavel($dtdia)))
			{
				//$mascaradt='dd/yyyy';
				if(($fimmes[$mes]<=$dtdia)||($mes=="02"||$mes=="2"))
					if(($mes=="02"||$mes=="2"))
						if(($dtano%4)==0)
							$dtdia = $fimmes[$mes];
						else
							$dtdia = $fimmes[$mes]-1;
					else
						$dtdia = $fimmes[$mes];

				$pesdtini=$dtdia."/". $mes ."/".$dtano;
				$pesdtfim=$dtdia."/". $mes ."/".$dtano;
			}
			if((VerificaVariavel($dtdia))&&(VerificaVariavel($dtmes)))
			{
				//$mascaradt='dd/mm/yyyy';
				$pesdtini=$dtdia."/".$dtmes."/".$dtano;
				$pesdtfim=$dtdia."/".$dtmes."/".$dtano;
			}
		}
		$GLOBALS["BbMascaraDataAtual"]			= $mascaradt 	. " HH24:MI:SS";
		$GLOBALS["BbBbDataInicioAtual"]			= $pesdtini 	. " 00:00:00";
		$GLOBALS["BbDatafimAtual"]				= $pesdtfim 	. " 23:59:59";
		return true;
	}
	else{
		return false;
	}
}
function BuscaVariaveisGetPost($get_vars, $post_vars) {
	$i = count($get_vars);
	$j = count($post_vars);
	if ($i > 0 && $j > 0 ) {
		while(list($key, $val) = each($get_vars)){
			$Vars[$key] = $val;
		}
		while(list($key2, $val2) = each($post_vars)){
			$Vars[$key2] = $val2;
		}
	}
	elseif ($i > 0){
		while(list($key, $val) = each($get_vars)) {
			$Vars[$key] = $val;
		}
	}
	elseif ($j > 0) {
		while(list($key2, $val2) = each($post_vars)) {
			$Vars[$key2] = $val2;
		}
	}
	else {
		$Vars = array();
	}
	return $Vars;
}
function MontaUrlPostRetorno($GET_VARS, $POST_VARS){
	global $UrlGetRetorno,$VarPostPagina,$VarsDeniedPost,$VarsDeniedGet,$VarsPostGetOk;
	$VarsPostGetOk = array();
	if(!isset($VarsDeniedPost))
		$VarsDeniedPost = array();
	if(!isset($VarsDeniedGet))
		$VarsDeniedGet = array();
	$UrlGetRetorno = "";
	$VarPostPagina = "";
	$ColecaoVarsPost = array();
	$Vars = BuscaVariaveisGetPost($GET_VARS, $POST_VARS);
	while(list($key2, $val2) = each($Vars))
	{
		$Conteudo = $val2;
		if(!(is_array($Conteudo))){
			if(VerificaVariavel($Conteudo)){
				if(@$ColecaoVarsPostGet[$key2] != $val2){
					if($key2 != "NotVar"){
						$ColecaoVarsPostGet[$key2] = $val2;
						if(!(in_array($key2, $VarsDeniedGet)))
							$UrlGetRetorno .= $key2 . "=" . urlencode($val2) ."&";
						if(!(in_array($key2, $VarsDeniedPost)))
							$VarPostPagina  .= "<input type=\"hidden\" name=\"$key2\" value=\"$val2\">\n";
						if( (!(in_array($key2, $VarsDeniedPost)))&&(!(in_array($key2, $VarsDeniedGet))))
							$VarsPostGetOk[$key2] = $val2;
						$ColecaoVarsPostGet[$key2] = $val2;
					}
				}
			}
		}
	}
}
function MontaUrlPostRetorno1($GET_VARS, $POST_VARS){
	global $UrlGetRetorno, $VarPostPagina;
	$UrlGetRetorno = "";
	$VarPostPagina = "";
	$ColecaoVarsPost = array();
	$Vars = BuscaVariaveisGetPost($GET_VARS, $POST_VARS);
	while(list($key2, $val2) = each($Vars))
	{
		$Conteudo = $val2;
		if(!(is_array($Conteudo))){
			if(VerificaVariavel($Conteudo)){
				if(@$ColecaoVarsPostGet[$key2] != $val2){
					$ColecaoVarsPostGet[$key2] = $val2;
					$UrlGetRetorno .= $key2 . "=" . urlencode($val2) ."&";
					$VarPostPagina  .= "<input type=\"hidden\" name=\"$key2\" value=\"$val2\">\n";
					$ColecaoVarsPostGet[$key2] = $val2;
				}
			}
		}
	}
}
function ImprimeBarraInfoAtencao($msg){
	$msg = "" . $msg . "";
	$barra_info_geral = "<TABLE border=1 CELLSPACING=\"0\" CELLPADDING=\"0\" align=center width=70%>"
					. "	<tr><TD  WIDTH=100% BGCOLOR=#033C5F>"
					. "	<table width=\"100%\" BORDER=\"1\" CELLSPACING=\"1\" CELLPADDING=\"1\">"
					. "	<tr WIDTH=100% BGCOLOR=#FFFFFF> "
					. "	<td rowspan=2 nowrap>"
					. "	<table width=100% border=0><tr><td>"
					. "	<img border=\"0\" src=\"/Layout/iconeexclamacaomaior.gif\">"
					. "	</td>"
					. "	<td><font face=\"Verdana\" size=1>"
					. $msg
					. "	</td></tr></table></td>"
					. "	</tr></table>"
					. "</td>"
					. "</tr>"
					. "</table>";
	echo ($barra_info_geral);
}
function BotaoVoltar(){
	echo "<center><form><input name=\"Voltar\" type=\"button\" value=\"Voltar\" class=\"botaosite\" onClick=\"javascript:history.back();\" ></form></center>";
}
function VoltaInicLogin($acao,$caption="Voltar"){	
	echo "<form method=POST name=\"login\" action=$acao>\r\n
	<input name=\"login\" type=\"submit\" value=\"$caption\" class=\"botaositesem\">\r\n
	</form>";
}
function BotaoVoltarDest($destino){
	print "<center><form name=frmenvia action=\"$destino\">\n"
	."<input name=\"Voltar\" type=\"button\" value=\"Voltar\" class=\"botaosite\" onClick=\"document.frmenvia.submit();\">\n"
	."</form></center>";
}
function CoresSistema($cor){
	global $corborda,$corlinha1,$corlinha2,$corlinha3,$corlinha,$corfontecabec,$corfontelinha;
	return $$cor;
	}
function NomeLimpoSecao($CodSeccao=""){
	$StrOrim = array(
	" De ",
	" Da ",
	" Da ",
	"Tribunal Regional Federal da 1ª Região",
	"Tribunal Regional Federal da Primeira Região",
	"Subseção Judiciária de ",
	"Seção Judiciária do ",
	"Seção Judiciária do Estado do ",
	"Seção Judiciária do Estado de ",
	"Subseção Judiciária De ",
	"Seção Judiciária Do Estado Do ",
	"Seção Judiciária Do Estado De ",
	"Estado De ",
	"Estado Do ",
	"Estado de ",
	"Estado do ",
	" "
	);
	$StrRepl = array(
	" de ",
	" da ",
	" do ",
	"TRF1",
	"TRF1",
	"",
	"",
	"",
	"",
	"",
	"",
	"",
	"",
	"",
	"",
	"",
	" "
	);
	if($CodSeccao=="")
		return "";
	else{
		$NomeLocal = DadoSecao($CodSeccao,'Sec');
		//$NomeLocal = ucwords(strtolower($NomeLocal));
		$NomeLocal = str_replace($StrOrim,$StrRepl,$NomeLocal);
		return $NomeLocal;
	}
}
function Telsecao($SecSig){
	switch ($SecSig){
		case "AM":
		case "TB":
		case "TBT":
			$telSecao = "(92) 2149128 (1ªv), 2149142(2ªv), 2149126(3ªv), 2149154(4ªv), 2149152(5ªv)";
			break;
		case "AC":
		case "ACJE":
			$telSecao = "(68) 2240821(1ª v), 2233468(2ª v), 2233467 (3ª v)";
			break;
		case "AP":
		case "APJE":
			$telSecao = "(96) 2141505(1ªv), 2141512(2ª v)";
			break;
		case "BA":
		case "BAJE":
			$telSecao = "(71) 3722600";
			break;
		case "IL":
			$telSecao = "(73) 6347225 / 6347225";
			break;
		case "PAF":
			$telSecao="";
			break;
		case "VCA":
			$telSecao="";
			break;
		case "JEE":
			$telSecao="";
			break;

		case "GNB":
			$telSecao="";
			break;

		case "DF":
		case "DFJE":
			$telSecao = "(61) 3221-6000";
			break;
		case "GO":
			$telSecao = "(62) 2261680";
			break;
		case "LZA":
			$telSecao="";
			break;
		case "ANS":
			$telSecao="";
			break;
		case "MA":
		case "CX":
		case "CXS":
		case "MAJE":
		case "IM":
			$telSecao = "(98) 2145701";
			break;
		case "MT":
		case "MTJE":
		case "CC":
		case "CCS":
			$telSecao = "(65) 6145779";
			break;
		case "ROI":
			$telSecao="";
			break;

		case "MG":
			$telSecao = "(31) 32996300";
			break;
		case "LAV":
			$telSecao="";
			break;
		case "VGA":
			$telSecao="";
			break;
		case "PS":
		case "PSS":
			$telSecao = "(35) 3522-7427";
			break;
		case "PSA":
			$telSecao = "(35) 3421-9506";
			break;
		case "PT":
		case "PMS":
			$telSecao = "(31) 32996300";
			break;
		case "DVL":
		$telSecao="";
		break;

		case "UB":
			$telSecao = "(34) 33125171";
			break;
		case "UD":
			$telSecao = "(34) 32337618(1ªv), 3237628(2ªv), 3237638(3ªv)";
			break;
		case "MCL":
			$telSecao = "(38) 21018200";
			break;
		case "SLA":
			$telSecao="";
			break;
		case "CFS":
			$telSecao = "";
			break;
		case "JZR":
			$telSecao = "(74) 3613-7402, (74) 3611-3961";
			break;
		case "FSA":
			$telSecao = "(75) 3221-6274";
			break;
		case "PCZ":
			$telSecao = "";
			break;
		case "BES":
			$telSecao = "";
			break;
		case "JF":
			$telSecao = "(32) 32491535";
			break;
		case "GVS":
			$telSecao="";
			break;

		case "IIG":
			$telSecao="";
			break;

		case "PA":
		case "PAJE":
		case "MB":
		case "ST":
			$telSecao = "(91) 2420055 / 2420255";
			break;
		case "ATM":
			$telSecao="";
			break;
		case "CAH":
		$telSecao="";
		break;
		case "PI":
		case "PIJE":
			$telSecao = "(86) 2151111 / 2151127";
			break;
		case "PCZ":
			$telSecao = "(89) 3422-2656";
			break;
		case "RO":
		case "ROJE":
			$telSecao = "(69) 2244146";
			break;
		case "JIP":
			$telSecao="";
			break;
		case "RR":
			$telSecao = "(95) 6214237 / 6214247";
			break;
		case "SS":
		case "SSP":
			$telSecao = "";
			break;
		case "TO":
		case "TOJE":
			$telSecao = "(63) 2183816(1ªv), 2183826 (2ªv), 2183884 (J.Esp.)";
			break;
		case "TRF1":
		case "1000":
		case "100":
			$telSecao = "";
			break;

	# NOVOS - 25/04/2006

		case "EUS":
		case "3310":
		   $telSecao="";
		   break;

		case "ITB":
		case "3311":
		   $telSecao="";
		   break;

		case "RVD":
		case "3503":
		   $telSecao="";
		   break;

		case "ACG":
		case "3504":
		   $telSecao="";
		   break;

		case "SNO":
		case "3603":
		   $telSecao="";
		   break;

		case "SOE":
		case "3815":
		   $telSecao="";
		   break;


	}
	return ($telSecao);
}

function NomeSecao($SecSig){
	switch ($SecSig){
		case "AM":
		case "JFAM":
		case "3200":
			$SECAOJud="Seção Judiciária do Amazonas";
			break;
		case "AMJE":
			$SECAOJud="Juizado Especial Federal do Amazonas";
			break;
		case "TB":
		case "TBT":
		case "3201":
			$SECAOJud="Subseção Judiciária de Tabatinga (AM)";
			break;
		case "AC":
		case "JFAC":
		case "3000":
			$SECAOJud="Seção Judiciária do Acre";
			break;
		case "ACJE":
			$SECAOJud="Juizado Especial Federal do Acre";
			break;
		case "AP":
		case "JFAP":
		case "3100":
			$SECAOJud="Seção Judiciária do Amapá";
			break;
		case "APJE":
			$SECAOJud="Seção Judiciária do Amapá";
			break;
		case "BA":
		case "JFBA":
		case "3300":
			$SECAOJud="Seção Judiciária da Bahia";
			break;
		case "BAJE":
			$SECAOJud="Juizado Especial Federal da Bahia";
			break;
		case "IL":
		case "ILS":
		case "3301":
			$SECAOJud="Subseção Judiciária de Ilhéus (BA)";
			break;
		case "CFS":
		case "3302":
			$SECAOJud="Subseção Judiciária de Campo Formoso (BA)";
			break;
		case "BR":
		case "BES":
		case "3303":
			$SECAOJud="Subseção Judiciária de Barreiras (BA)";
			break;
		case "FSA":
		case "3304":
			$SECAOJud="Subseção Judiciária de Feira de Santana (BA)";
			break;
		case "JZR":
		case "3305":
			$SECAOJud="Subseção Judiciária de Juazeiro (BA)";
			break;
		case "PAF":
		case "3306":
			$SECAOJud=" Subseção Judiciária de Paulo Afonso (BA)";
			break;
		case "VCA":
		case "3307":
			$SECAOJud=" Subseção Judiciária de Vitória da Conquista (BA)";
			break;
		case "JEE":
		case "3308":
			$SECAOJud=" Subseção Judiciária de Jequié (BA)";
			break;
		case "GNB":
		case "3309":
			$SECAOJud=" Subseção Judiciária de Guanambi (BA)";
			break;
		case "EUS":
		case "3310":
		   $SECAOJud="Subseção Judiciária de Eunápolis (BA)";
		   break;
		case "ITB":
		case "3311":
		   $SECAOJud="Subseção Judiciária de Itabuna (BA)";
		   break;
		case "DF":
		case "JFDF":
		case "3400":
			$SECAOJud="Seção Judiciária do Distrito Federal";
			break;
		case "DFJE":
			$SECAOJud="Juizado Especial Federal do Distrito Federal";
			break;
		case "GO":
		case "JFGO":
		case "3500":
			$SECAOJud="Seção Judiciária de Goiás";
			break;
		case "LZA":
		case "3501":
			$SECAOJud=" Subseção Judiciária de Luziania(GO)";
			break;
		case "ANS":
		case "3502":
			$SECAOJud=" Subseção Judiciária de Anápolis(GO)";
			break;
		case "RVD":
		case "3503":
		   $SECAOJud="Subseção Judiciária de Rio Verde(GO)";
		   break;
		case "ACG":
		case "3504":
		   $SECAOJud="Subseção Judiciária de Aparecida de Goiânia(GO)";
		   break;
		case "MT":
		case "JFMT":
		case "3600":
			$SECAOJud="Seção Judiciária de Mato Grosso";
			break;
		case "MTJE":
			$SECAOJud="Juizado Especial Federal de Mato Grosso";
			break;
		case "CCS":
		case "CC":
		case "3601":
			$SECAOJud="Subseção Judiciária de Cáceres (MT)";
			break;
		case "ROI":
		case "3602":
			$SECAOJud=" Subseção Judiciária de Rondonópolis (MT)";
			break;
		case "SNO":
		case "SNP":
		case "3603":
		   $SECAOJud="Subseção Judiciária de Sinop (MT)";
		   break;
		case "MA":
		case "JFMA":
		case "3700":
			$SECAOJud="Seção Judiciária do Maranhão";
			break;
		case "MAJE":
			$SECAOJud="Juizado Especial Federal do Maranhão";
			break;
		case "IM":
		case "ITZ":
		case "3701":
			$SECAOJud="Subseção Judiciária de Imperatriz (MA)";
			break;
		case "CX":
		case "CXS":
		case "3702":
			$SECAOJud="Subseção Judiciária de Caxias (MA)";
			break;
		case "MG":
		case "JFMG":
		case "3800":
			$SECAOJud="Seção Judiciária de Minas Gerais";
			break;
		case "JF":
		case "JFO":
		case "3801":
			$SECAOJud="Subseção Judiciária de Juiz de Fora (MG)";
			break;
		case "UB":
		case "UBE":
		case "3802":
			$SECAOJud="Subseção Judiciária de Uberaba (MG)";
			break;
		case "UD":
		case "UDI":
		case "UL":
		case "3803":
			$SECAOJud="Subseção Judiciária de Uberlândia (MG)";
			break;
		case "PS":
		case "PSS":
		case "3804":
			$SECAOJud="Subseção Judiciária de Passos (MG)";
			break;
		case "SS":
		case "SSP":
		case "3805":
			$SECAOJud="Subseção Judiciária de São Sebastião do Paraíso (MG)";
			break;
		case "PT":
		case "PMS":
		case "3806":
			$SECAOJud="Subseção Judiciária de Patos de Minas (MG)";
			break;
		case "MCL":
		case "3807":
			$SECAOJud="Subseção Judiciária de Montes Claros (MG)";
			break;
		case "LAV":
		case "3808":
			$SECAOJud=" Subseção Judiciária de Lavras(MG)";
			break;
		case "VGA":
		case "3809":
			$SECAOJud=" Subseção Judiciária de Varginha(MG)";
			break;
		case "PSA":
		case "3810":
			$SECAOJud="Subseção Judiciária de Pouso Alegre (MG)";
			break;
		case "DVL":
		case "3811":
			$SECAOJud=" Subseção Judiciária de Divinópolis(MG)";
			break;
		case "SLA":
		case "3812":
			$SECAOJud=" Subseção Judiciária de Sete Lagoas(MG)";
			break;
		case "GVS":
		case "3813":
			$SECAOJud=" Subseção Judiciária de Governador Valadares(MG)";
			break;
		case "IIG":
		case "3814":
			$SECAOJud=" Subseção Judiciária de Ipatinga(MG)";
			break;
		case "SOE":
		case "3815":
		   $SECAOJud="Subseção Judiciária de são João Del Rei(MG)";
		   break;
		case "PA":
		case "JFPA":
		case "3900":
			$SECAOJud="Seção Judiciária do Pará";
			break;
		case "PAJE":
			$SECAOJud="Juizado Especial Federal do Pará";
			break;
		case "MB":
		case "MBA":
		case "3901":
			$SECAOJud="Subseção Judiciária de Marabá (PA)";
			break;
		case "ST":
		case "STM":
		case "3902":
			$SECAOJud="Subseção Judiciária de Santarém (PA)";
			break;
		case "ATM":
		case "3903":
			$SECAOJud=" Subseção Judiciária de Altamira(PA)";
			break;
		case "CAH":
		case "3904":
			$SECAOJud=" Subseção Judiciária de Castanhal(PA)";
			break;
		case "PI":
		case "JFPI":
		case "4000":
			$SECAOJud="Seção Judiciária do Piauí";
			break;
		case "PIJE":
			$SECAOJud="Juizado Especial Federal do Piauí";
			break;
		case "PCZ":
		case "4001":
			$SECAOJud="Subseção Judiciária de Picos (PI)";
			break;
		case "RO":
		case "JFRO":
		case "4100":
			$SECAOJud="Seção Judiciária de Rondônia";
			break;
		case "ROJE":
			$SECAOJud="Juizado Especial Federal de Rondônia";
			break;
		case "JIP":
		case "4101":
			$SECAOJud=" Subseção Judiciária de Ji-paraná(RO)";
			break;
		case "RR":
		case "JFRR":
		case "4200":
			$SECAOJud="Seção Judiciária de Roraima";
			break;
		case "RRJE":
			$SECAOJud="Juizado Especial Federal de Roraima";
			break;
		case "TO":
		case "JFTO":
		case "4300":
			$SECAOJud="Seção Judiciária de Tocantins";
			break;
		case "TOJE":
			$SECAOJud="Juizado Especial Federal de Tocantins";
			break;
		case "TRF1":
		case "1000":
		case "100":
			$SECAOJud="Tribunal Regional Federal da 1ª Região";
			break;
		# NOVOS - 25/04/2006
		case "EUS":
		case "3310":
		   $SECAOJud="Subseção Judiciária de Eunápolis";
		   break;
		case "ITB":
		case "3311":
		   $SECAOJud="Subseção Judiciária de Itabuna";
		   break;
		case "RVD":
		case "3503":
		   $SECAOJud="Subseção Judiciária de Rio Verde";
		   break;
		case "ACG":
		case "3504":
		   $SECAOJud="Subseção Judiciária de Aparecida de Goiânia";
		   break;
		case "SNO":
		case "3603":
		   $SECAOJud="Subseção Judiciária de Sinop";
		   break;
		case "SOE":
		case "3815":
		   $SECAOJud="Subseção Judiciária de são João del rei";
		   break;
		default :
			$SECAOJud="Justiça Federal da 1ª Região";

	}
	return ($SECAOJud);
}



function Conexao($SecSig,$Par){

/*
echo"<BR>******<BR>";
echo($SecSig)."<BR>";
echo($Par)."<BR>";
echo"<BR>******<BR>";
exit();
*/
//echo "<!--\r\n" . $Par."\r\n-->";
	$Usuario="CONSULTANET";
	$Senha="NETCONSULTA";
	$UsuarioSw="CONSULTANETS";
	$SenhaSw="prweb2008";
	$UsuarioApp="TRFWEBUSR";
	$SenhaApp="diviptmp";
	$UsrIntraNome="TRFWEBINTRA";
	$UsrIntraSenha="intraweb";
	$UsrNome="WEBUSR";
	$UsrSenha="rdusdwe";
	switch ($SecSig){
		case "AM":
		case "JFAM":
		case "3200":
			$TNS="(DESCRIPTION = (SDU = 1460)(TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.19.3.3)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.19.3.3)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = jfam.trf1.gov.br)(INSTANCE_NAME = jfam)))";
			break;
		case "TB":
		case "TBT":
		case "3201":
			$TNS="(DESCRIPTION =(ADDRESS_LIST =(ADDRESS = (PROTOCOL = TCP)(HOST = 172.19.32.3)(PORT = 1521)))(SDU = 2920)(CONNECT_DATA =(SERVICE_NAME = tbt.trf1.gov.br)(INSTANCE_NAME = tbt)))";
			break;
		case "AC":
		case "JFAC":
		case "ACJE":
		case "3000":
			  $TNS="(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.17.3.3)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.17.3.3)(PORT = 1526)))(CONNECT_DATA =(SERVICE_NAME = jfac.trf1.gov.br)(INSTANCE_NAME = jfac)))";
			break;
		case "AP":
		case "JFAP":
		case "APJE":
		case "3100":
			$TNS="(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.18.3.3)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.18.3.3)(PORT = 1526))) (CONNECT_DATA = (SID = JFAP)))";
			break;
		case "BA":
		case "JFBA":
		case "BAJE":
		case "3300":
			$TNS="(DESCRIPTION =(SDU = 1460)(TDU = 1460)(ADDRESS_LIST =(ADDRESS = (PROTOCOL = TCP)(HOST = 172.20.3.3)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.20.3.3)(PORT = 1526)))(CONNECT_DATA =(SERVICE_NAME = jfba.trf1.gov.br)(INSTANCE_NAME = jfba)))";
			break;
		case "ILS":
		case "IL":
		case "3301":
		case "CFS":
		case "3302":
		case "BES":
		case "3303":
		case "JZR":
		case "3305":
		case "FSA":
		case "3304":
			$TNS="(DESCRIPTION = (SDU = 1460) (TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = ils.trf1.gov.br) (INSTANCE_NAME = ils)))";
			break;
		case "PAF":
		case "3306":
			$TNS="(DESCRIPTION = (SDU = 1460) (TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = ils.trf1.gov.br) (INSTANCE_NAME = ils)))";
			break;
		case "VCA":
		case "3307":
			$TNS="(DESCRIPTION = (SDU = 1460) (TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = ils.trf1.gov.br) (INSTANCE_NAME = ils)))";
			break;
		case "JEE":
		case "3308":
			$TNS="(DESCRIPTION = (SDU = 1460) (TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = ils.trf1.gov.br) (INSTANCE_NAME = ils)))";
			break;
		case "GNB":
		case "3309":
			$TNS="(DESCRIPTION = (SDU = 1460) (TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = ils.trf1.gov.br) (INSTANCE_NAME = ils)))";
			break;
		case "EUS":
		case "3310":
		   $TNS="(DESCRIPTION = (SDU = 1460) (TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = ils.trf1.gov.br) (INSTANCE_NAME = ils)))";
		   break;
		case "ITB":
		case "3311":
		   $TNS="(DESCRIPTION = (SDU = 1460) (TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = ils.trf1.gov.br) (INSTANCE_NAME = ils)))";
		   break;

		case "DF":
		case "JFDF":
		case "DFJE":
		case "3400":
			$TNS="(DESCRIPTION =(SDU = 1460)(TDU = 1460)(ADDRESS_LIST =(ADDRESS = (PROTOCOL = TCP)(HOST = 172.21.3.3)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.21.3.3)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = jfdf.trf1.gov.br)(INSTANCE_NAME = jfdf)))";
			break;

		case "GO":
		case "JFGO":
		case "3500":
			$TNS="(DESCRIPTION = (SDU = 1460)(TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.22.3.3)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.22.3.3)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = jfgo.trf1.gov.br) (INSTANCE_NAME = jfgo)))";
			//$TNS="(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.22.3.3)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.22.3.3)(PORT = 1526))) (CONNECT_DATA = (SID = JFGO)))";
			break;
		case "LZA":
		case "3501":
			$TNS="(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.22.3.3)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.22.3.3)(PORT = 1526))) (CONNECT_DATA = (SID = JFGO)))";
			break;
		case "ANS":
		case "3502":
			$TNS="(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.22.3.3)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.22.3.3)(PORT = 1526))) (CONNECT_DATA = (SID = JFGO)))";
			break;
		case "RVD":
		case "3503":
		   $TNS="(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.22.3.3)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.22.3.3)(PORT = 1526))) (CONNECT_DATA = (SID = JFGO)))";
		   break;
		case "ACG":
		case "3504":
		   $TNS="(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.22.3.3)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.22.3.3)(PORT = 1526))) (CONNECT_DATA = (SID = JFGO)))";
		   break;
		case "MA":
		case "JFMA":
		case "MAJE":
		case "3700":
		case "CX":
		case "CXS":
		case "3702":
		case "CXJE":
			$TNS="(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.23.3.3)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.23.3.3)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = jfma.trf1.gov.br)(INSTANCE_NAME = jfma)))";
			break;
		case "IM":
		case "ITZ":
		case "3701":
			//Imperatriz
			$TNS="(DESCRIPTION = (SDU = 1460)(TDU = 1460)(ADDRESS_LIST =(ADDRESS = (PROTOCOL = TCP)(HOST = 172.23.3.3 )(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.23.3.3)(PORT = 1526))) (CONNECT_DATA = (SERVICE_NAME = itz.trf1.gov.br) (INSTANCE_NAME = itz)))";
			break;
		case "MT":
		case "JFMT":
		case "MTJE":
		case "3600":
		case "CC":
		case "CCS":
		case "3601":
			//$TNS="JFMT";
			$TNS="(DESCRIPTION =(SDU = 1460)(TDU = 1460)(ADDRESS_LIST =(ADDRESS = (PROTOCOL = TCP)(HOST = 172.24.3.3)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.24.3.3)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = jfmt.trf1.gov.br)(INSTANCE_NAME = jfmt)))";
			break;
		case "ROI":
		case "3602":
			//$TNS="JFMT";
			$TNS="(DESCRIPTION =(SDU = 1460)(TDU = 1460)(ADDRESS_LIST =(ADDRESS = (PROTOCOL = TCP)(HOST = 172.24.3.3)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.24.3.3)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = jfmt.trf1.gov.br)(INSTANCE_NAME = jfmt)))";
			break;
		case "SNO":
		case "3603":
		   $TNS="(DESCRIPTION =(SDU = 1460)(TDU = 1460)(ADDRESS_LIST =(ADDRESS = (PROTOCOL = TCP)(HOST = 172.24.3.3)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.24.3.3)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = jfmt.trf1.gov.br)(INSTANCE_NAME = jfmt)))";
		   //$TNS="JFMT";
		   break;
		case "MG":
		case "JFMG":
		case "3800":
			$TNS="  (DESCRIPTION = (SDU = 1460)(TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.25.3.3)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.25.3.3)(PORT = 1526))) (CONNECT_DATA = (SERVICE_NAME = jfmg.trf1.gov.br) (INSTANCE_NAME = jfmg)))";
			//$TNS="JFMG";
			break;
		case "JF":
		case "JFO":
		case "3801":
			$TNS="(DESCRIPTION =(SDU = 1460)(TDU = 1460)(ADDRESS_LIST =(ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = jfo.trf1.gov.br)(INSTANCE_NAME = jfo)))";
			//$TNS="(DESCRIPTION =(SDU = 1460)(TDU = 1460)(ADDRESS_LIST =(ADDRESS = (PROTOCOL = TCP)(HOST = 172.25.96.3)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.25.96.3)(PORT = 1526)))(CONNECT_DATA =(SERVICE_NAME = jfo.trf1.gov.br)(INSTANCE_NAME = jfo)))";
			break;
		case "UB":
		case "UBE":
		case "3802":
		case "SS":
		case "SSP":
		case "3805":
		case "PT":
		case "PMS":
		case "3806":
		case "PSA":
		case "3810":
			$TNS="(DESCRIPTION = (SDU = 1460) (TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = ube.trf1.gov.br)(INSTANCE_NAME = ube)))";
			break;
		case "UD":
		case "UDI":
		case "3803":
			$TNS="(DESCRIPTION =(SDU = 1460)(TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = udi.trf1.gov.br) (INSTANCE_NAME = udi) ) )";
			//$TNS="(DESCRIPTION =(SDU = 1460)(TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.3)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.3)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = udi.trf1.gov.br) (INSTANCE_NAME = udi)))";
			break;
		case "PS":
		case "PSS":
		case "3804":
		case "MCL":
		case "3807":
  			$TNS = "(DESCRIPTION = (SDU = 1460) (TDU = 1460) (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)) ) (CONNECT_DATA = (SERVICE_NAME = pss.trf1.gov.br)(INSTANCE_NAME = pss)) )";
			break;
		case "LAV":
		case "3808":
			$TNS="(DESCRIPTION = (SDU = 1460) (TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = ube.trf1.gov.br)(INSTANCE_NAME = ube)))";
			break;
		case "VGA":
		case "3809":
			$TNS="(DESCRIPTION = (SDU = 1460) (TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = ube.trf1.gov.br)(INSTANCE_NAME = ube)))";
			break;
		case "DVL":
		case "3811":
			$TNS="(DESCRIPTION = (SDU = 1460) (TDU = 1460) (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)) ) (CONNECT_DATA = (SERVICE_NAME = pss.trf1.gov.br)(INSTANCE_NAME = pss)) )";
			break;
		case "SLA":
		case "3812":
			$TNS="(DESCRIPTION = (SDU = 1460) (TDU = 1460) (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)) ) (CONNECT_DATA = (SERVICE_NAME = pss.trf1.gov.br)(INSTANCE_NAME = pss)) )";
			break;
		case "GVS":
		case "3813":
			$TNS="(DESCRIPTION = (SDU = 1460) (TDU = 1460) (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)) ) (CONNECT_DATA = (SERVICE_NAME = pss.trf1.gov.br)(INSTANCE_NAME = pss)) )";
			break;
		case "IIG":
		case "3814":
			$TNS="(DESCRIPTION = (SDU = 1460) (TDU = 1460) (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)) ) (CONNECT_DATA = (SERVICE_NAME = pss.trf1.gov.br)(INSTANCE_NAME = pss)) )";
			break;
		case "SOE":
		case "3815":
		    $TNS="(DESCRIPTION = (SDU = 1460) (TDU = 1460) (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = pss.trf1.gov.br)(INSTANCE_NAME = pss)))";
		    break;
		case "PA":
		case "JFPA":
		case "PAJE":
		case "3900":
		  	$TNS="(DESCRIPTION =(SDU = 1460)(TDU = 1460)(ADDRESS_LIST =(ADDRESS = (PROTOCOL = TCP)(HOST = 172.26.3.3)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.26.3.3)(PORT = 1526)))(CONNECT_DATA =(SERVICE_NAME = jfpa.trf1.gov.br)(INSTANCE_NAME = jfpa)))";
			break;
		case "MB":
		case "MBA":
		case "3901":
			//Marabá
			$TNS="(DESCRIPTION = (SDU = 1460)(TDU = 1460)(ADDRESS_LIST =(ADDRESS = (PROTOCOL = TCP)(HOST = 172.26.3.3)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.26.3.3)(PORT = 1526)))(CONNECT_DATA =(SERVICE_NAME = mba.trf1.gov.br)(INSTANCE_NAME = mba)))";
			break;
		case "ST":
		case "STM":
		case "STZ":
		case "3902":
			//Santarém
			$TNS="(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.26.32.3)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.26.32.3)(PORT = 1526)))(CONNECT_DATA =(SERVICE_NAME = stm.trf1.gov.br)(INSTANCE_NAME = stm)))";
			break;
		case "ATM":
		case "3903":
			$TNS="(DESCRIPTION = (SDU = 1460)(TDU = 1460)(ADDRESS_LIST =(ADDRESS = (PROTOCOL = TCP)(HOST = 172.26.3.3)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.26.3.3)(PORT = 1526)))(CONNECT_DATA =(SERVICE_NAME = mba.trf1.gov.br)(INSTANCE_NAME = mba)))";
			break;
		case "CAH":
		case "3904":
			$TNS="(DESCRIPTION = (SDU = 1460)(TDU = 1460)(ADDRESS_LIST =(ADDRESS = (PROTOCOL = TCP)(HOST = 172.26.3.3)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.26.3.3)(PORT = 1526)))(CONNECT_DATA =(SERVICE_NAME = mba.trf1.gov.br)(INSTANCE_NAME = mba)))";
			break;

		case "PI":
		case "JFPI":
		case "PIJE":
		case "4000":
		case "PCZ":
		case "4001":
			$TNS="(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.27.3.3)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.27.3.3)(PORT = 1526))) (CONNECT_DATA = (SID = JFPI)))";
			break;
		case "RO":
		case "JFRO":
		case "ROJE":
		case "4100":
			$TNS="(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.28.3.3)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.28.3.3)(PORT = 1526))) (CONNECT_DATA = (SID = JFRO)))";
			break;
		case "JIP":
		case "4101":
			$TNS="(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.28.3.3)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.28.3.3)(PORT = 1526))) (CONNECT_DATA = (SID = JFRO)))";
			break;
		case "RR":
		case "JFRR":
		case "RRJE":
		case "4200":
			//$TNS="JFRR";
			$TNS="(DESCRIPTION = (SDU = 1460)(TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.29.3.3)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.29.3.3)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = jfrr.trf1.gov.br)(INSTANCE_NAME = jfrr)))";
			break;
		case "TO":
		case "JFTO":
		case "TOJE":
		case "4300":
			$TNS="(DESCRIPTION = (SDU = 1460)(TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.30.3.3)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.30.3.3)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = jfto.trf1.gov.br)(INSTANCE_NAME = jfto)))";
			break;
		case "TRF":
		case "TRF1":
		case "1000":
		case "100":
		case "0100":
			$TNS="(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.3)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.3)(PORT = 1526)))(CONNECT_DATA =(SERVICE_NAME = trf1.trf1.gov.br)(INSTANCE_NAME = trf1))(SDU = 1460))";
			//$TNS="TRF1";
			break;
		case "TRF1DSV":
			$TNS="TRF1DSV";
			break;
		case "JFDSV1":
		case "JFDSV":
			$TNS="JFDSV";
			break;
		case "JFDSV2":
		case "JFTMP1":
			$TNS="JFTMP1";
			break;
		case "JFDSV3":
		case "JFTMP2":
			$TNS="JFDSV3";
			break;
		case "JFDSV4":
		case "SNCJ":
			$TNS="SNCJ";
			break;
		case "JFDSV6":
		case "TRF1HML":
			$TNS="TRF1HML";
			break;
		case "JFHML ":
			$TNS="JFHML ";
			break;
		case "CJF":
		case "CJFTRF1":
			$TNS="(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.129)(PORT = 1521)) (CONNECT_DATA =  (SERVER = DEDICATED) (SERVICE_NAME = CJFTRF1) ) )";
			break;
		default:
			$TNS="(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.3)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.3)(PORT = 1526)))(CONNECT_DATA =(SERVICE_NAME = trf1.trf1.gov.br)(INSTANCE_NAME = trf1))(SDU = 1460))";
			//$TNS="TRF1";
	}
	switch ($Par){
		case 1:
			return ($TNS);
			break;
		case 2:
			return ($Usuario);
			break;
		case 3:
			return ($Senha);
			break;
		case 4:
			return ($UsuarioApp);
			break;
		case 5:
			return ($SenhaApp);
			break;
		case 6:
			return ($UsrIntraNome);
			break;
		case 7:
			return ($UsrIntraSenha);
			break;
		case 8:
			return ($UsrNome);
			break;
		case 9:
			return ($UsrSenha);
			break;
		case 10:
			return ($UsuarioSw);
			break;
		case 11:
			return ($SenhaSw);
			break;
			}
}
function ExemploProc($CodSec,$tipo)
{
	switch ($CodSec)
	{
		case "AM":
		case "AMJE":
		case "3200":
			if ($tipo==1) $Exemplo="93.00.00448-4";
			if ($tipo==2) $Exemplo="9300004484";
			if ($tipo==3) $Exemplo="1997.32.00.004766-6";
			if ($tipo==4) $Exemplo="199732000047666";
			if ($tipo==5) $Exemplo="3200";
			if ($tipo==7) $Exemplo="4751-73.1997.4.01.3200";
			if ($tipo==8) $Exemplo="47517319974013200";
			break;
		case "TB":
		case "TBT":
		case "3201":
			if ($tipo==1) $Exemplo="";
			if ($tipo==2) $Exemplo="";
			if ($tipo==3) $Exemplo="2004.32.01.000012-9";
			if ($tipo==4) $Exemplo="200432010000129";
			if ($tipo==5) $Exemplo="3201";
			if ($tipo==7) $Exemplo="12-10.2004.4.01.3201";
			if ($tipo==8) $Exemplo="121020044013201";
			break;
		case "AC":
		case "3000":
			if ($tipo==1) $Exemplo="90.00.00082-3";
			if ($tipo==2) $Exemplo="9000000823";
			if ($tipo==3) $Exemplo="1998.30.00.001495-9";
			if ($tipo==4) $Exemplo="199830000014959";
			if ($tipo==5) $Exemplo="3000";
			if ($tipo==7) $Exemplo="1497-76.1998.4.01.3000";
			if ($tipo==8) $Exemplo="14977619984013000";
			break;
		case "ACJE":
		case "3000":
			if ($tipo==1) $Exemplo="90.00.00082-3";
			if ($tipo==2) $Exemplo="9000000823";
			if ($tipo==3) $Exemplo="1998.30.00.001495-9";
			if ($tipo==4) $Exemplo="199830000014959";
			if ($tipo==5) $Exemplo="3000";
			if ($tipo==7) $Exemplo="1497-76.1998.4.01.3000";
			if ($tipo==8) $Exemplo="14977619984013000";
			break;
		case "AP":
		case "3100":
			if ($tipo==1) $Exemplo="92.00.01842-4";
			if ($tipo==2) $Exemplo="9200018424";
			if ($tipo==3) $Exemplo="2000.31.00.000451-7";
			if ($tipo==4) $Exemplo="200031000004517";
			if ($tipo==5) $Exemplo="3100";
			if ($tipo==7) $Exemplo="451-72.2000.4.01.3100";
			if ($tipo==8) $Exemplo="4517220004013100";
			break;
		case "APJE":
		case "3100":
			if ($tipo==1) $Exemplo="92.00.01842-4";
			if ($tipo==2) $Exemplo="9200018424";
			if ($tipo==3) $Exemplo="2000.31.00.000451-7";
			if ($tipo==4) $Exemplo="200031000004517";
			if ($tipo==5) $Exemplo="3100";
			if ($tipo==7) $Exemplo="451-72.2000.4.01.3100";
			if ($tipo==8) $Exemplo="4517220004013100";
			break;
		case "BA":
		case "BAJE":
		case "3300":
			if ($tipo==1) $Exemplo="96.00.14796-5";
			if ($tipo==2) $Exemplo="9600147965";
			if ($tipo==3) $Exemplo="1999.33.00.015204-7";
			if ($tipo==4) $Exemplo="199933000152047";
			if ($tipo==5) $Exemplo="3300";
			if ($tipo==7) $Exemplo="15203-65.1999.4.01.3300";
			if ($tipo==8) $Exemplo="152036519994013300";
			break;
		case "IL":
		case "3301":
			if ($tipo==1) $Exemplo="96.10.00011-8";
			if ($tipo==2) $Exemplo="9610000118";
			if ($tipo==3) $Exemplo="2002.33.00.006319-6";
			if ($tipo==4) $Exemplo="200233000063196";
			if ($tipo==5) $Exemplo="3301";
			if ($tipo==7) $Exemplo="9-17.2002.4.01.3301";
			if ($tipo==8) $Exemplo="91720024013301";
			break;
		case "CF":		
		case "CFS":		
		case "3302":
			if ($tipo==1) $Exemplo="96.00.14796-5";
			if ($tipo==2) $Exemplo="9600147965";
			if ($tipo==3) $Exemplo="1999.33.00.015204-7";
			if ($tipo==4) $Exemplo="199933000152047";
			if ($tipo==5) $Exemplo="3302";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;
		case "BES":		
		case "3303":
			if ($tipo==1) $Exemplo="96.00.14796-5";
			if ($tipo==2) $Exemplo="9600147965";
			if ($tipo==3) $Exemplo="1999.33.00.015204-7";
			if ($tipo==4) $Exemplo="199933000152047";
			if ($tipo==5) $Exemplo="3303";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;
		case "JZR":		
		case "3305":
			if ($tipo==1) $Exemplo="96.00.14796-5";
			if ($tipo==2) $Exemplo="9600147965";
			if ($tipo==3) $Exemplo="1999.33.00.015204-7";
			if ($tipo==4) $Exemplo="199933000152047";
			if ($tipo==5) $Exemplo="3305";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;
		case "FSA":		
		case "3304":
			if ($tipo==1) $Exemplo="96.00.14796-5";
			if ($tipo==2) $Exemplo="9600147965";
			if ($tipo==3) $Exemplo="1999.33.00.015204-7";
			if ($tipo==4) $Exemplo="199933000152047";
			if ($tipo==5) $Exemplo="3304";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;
		case "PAF": 
		case "3306":
			if ($tipo==1) $Exemplo="";
			if ($tipo==2) $Exemplo="";
			if ($tipo==3) $Exemplo="";
			if ($tipo==4) $Exemplo="";
			if ($tipo==5) $Exemplo="3306";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;
		case "VCA": 
		case "3307":
			if ($tipo==1) $Exemplo="";
			if ($tipo==2) $Exemplo="";
			if ($tipo==3) $Exemplo="";
			if ($tipo==4) $Exemplo="";
			if ($tipo==5) $Exemplo="3307";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;
		case "JEE": 
		case "3308":
			if ($tipo==1) $Exemplo="";
			if ($tipo==2) $Exemplo="";
			if ($tipo==3) $Exemplo="";
			if ($tipo==4) $Exemplo="";
			if ($tipo==5) $Exemplo="3308";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;		
		case "GNB": 
		case "3309":
			if ($tipo==1) $Exemplo="";
			if ($tipo==2) $Exemplo="";
			if ($tipo==3) $Exemplo="";
			if ($tipo==4) $Exemplo="";
			if ($tipo==5) $Exemplo="3309";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;

		case "DF":
		case "3400":
			if ($tipo==1) $Exemplo="88.00.06099-4";
			if ($tipo==2) $Exemplo="8800060994";
			if ($tipo==3) $Exemplo="2000.34.00.037098-3";
			if ($tipo==4) $Exemplo="200034000370983";
			if ($tipo==5) $Exemplo="3400";
			if ($tipo==7) $Exemplo="36535-45.2000.4.01.3400";
			if ($tipo==8) $Exemplo="365354520004013400";
			break;
		case "DFJE":
		case "3400":
		case "JFDSV":
			if ($tipo==1) $Exemplo="88.00.06099-4";
			if ($tipo==2) $Exemplo="8800060994";
			if ($tipo==3) $Exemplo="2003.34.00.900000-2";
			if ($tipo==4) $Exemplo="200334009000002";
			if ($tipo==5) $Exemplo="3400";
			if ($tipo==7) $Exemplo="36535-45.2000.4.01.3400";
			if ($tipo==8) $Exemplo="365354520004013400";
			break;
		case "GO":
		case "3500":
			if ($tipo==1) $Exemplo="95.00.03248-1";
			if ($tipo==2) $Exemplo="9500032481";
			if ($tipo==3) $Exemplo="1999.35.00.008552-5";
			if ($tipo==4) $Exemplo="199935000085525";
			if ($tipo==5) $Exemplo="3500";
			if ($tipo==7) $Exemplo="8534-75.1999.4.01.3500";
			if ($tipo==8) $Exemplo="85347519994013500";
			break;
		case "LZA": 
		case "3501":
			if ($tipo==1) $Exemplo="95.00.03248-1";
			if ($tipo==2) $Exemplo="9500032481";
			if ($tipo==3) $Exemplo="1999.35.00.008552-5";
			if ($tipo==4) $Exemplo="199935000085525";
			if ($tipo==5) $Exemplo="3501";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;		
		case "ANS": 
		case "3502":
			if ($tipo==1) $Exemplo="95.00.03248-1";
			if ($tipo==2) $Exemplo="9500032481";
			if ($tipo==3) $Exemplo="1999.35.00.008552-5";
			if ($tipo==4) $Exemplo="199935000085525";
			if ($tipo==5) $Exemplo="3502";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;
		case "MT":
		case "3600":
			if ($tipo==1) $Exemplo="91.00.00254-2";
			if ($tipo==2) $Exemplo="9100002542";
			if ($tipo==3) $Exemplo="2000.36.00.000560-4";
			if ($tipo==4) $Exemplo="200036000005604";
			if ($tipo==5) $Exemplo="3600";
			if ($tipo==7) $Exemplo="560-41.2000.4.01.3600";
			if ($tipo==8) $Exemplo="5604120004013600";
			break;
		case "MTJE":
		case "3600":
			if ($tipo==1) $Exemplo="91.00.00254-2";
			if ($tipo==2) $Exemplo="9100002542";
			if ($tipo==3) $Exemplo="2000.36.00.000560-4";
			if ($tipo==4) $Exemplo="200036000005604";
			if ($tipo==5) $Exemplo="3600";
			if ($tipo==7) $Exemplo="560-41.2000.4.01.3600";
			if ($tipo==8) $Exemplo="5604120004013600";
			break;
		case "CC":
		case "CCS":
		case "3601":
			if ($tipo==1) $Exemplo="91.00.00254-2";
			if ($tipo==2) $Exemplo="9100002542";
			if ($tipo==3) $Exemplo="2000.36.00.000560-4";
			if ($tipo==4) $Exemplo="200036000005604";
			if ($tipo==5) $Exemplo="3601";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;
		case "ROI": 
		case "3602":
			if ($tipo==1) $Exemplo="";
			if ($tipo==2) $Exemplo="";
			if ($tipo==3) $Exemplo="";
			if ($tipo==4) $Exemplo="";
			if ($tipo==5) $Exemplo="3602";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;
		case "MA":
		case "MAJE":
		case "3700":
			if ($tipo==1) $Exemplo="93.00.00506-5";
			if ($tipo==2) $Exemplo="9300005065";
			if ($tipo==3) $Exemplo="1997.37.00.006122-0";
			if ($tipo==4) $Exemplo="199737000061220";
			if ($tipo==5) $Exemplo="3700";
			if ($tipo==7) $Exemplo="6030-49.1997.4.01.3700";
			if ($tipo==8) $Exemplo="60304919974013700";
			break;
		case "IM":
		case "3701":
			if ($tipo==1) $Exemplo="95.00.00488-7";
			if ($tipo==2) $Exemplo="9500004887";
			if ($tipo==3) $Exemplo="2002.37.00.003517-1";
			if ($tipo==4) $Exemplo="200237000035171";
			if ($tipo==5) $Exemplo="3701";
			if ($tipo==7) $Exemplo="11-48.2002.4.01.3701";
			if ($tipo==8) $Exemplo="114820024013701";
			break;
		case "CX":
		case "CXS":
		case "3702":
			if ($tipo==1) $Exemplo="93.00.00506-5";
			if ($tipo==2) $Exemplo="9300005065";
			if ($tipo==3) $Exemplo="1997.37.00.006122-0";
			if ($tipo==4) $Exemplo="199737000061220";
			if ($tipo==5) $Exemplo="3702";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;
		case "MG":
		case "3800":
			if ($tipo==1) $Exemplo="89.00.10945-6";
			if ($tipo==2) $Exemplo="8900109456";
			if ($tipo==3) $Exemplo="1999.38.00.040393-6";
			if ($tipo==4) $Exemplo="199938000403936";
			if ($tipo==5) $Exemplo="3800";
			if ($tipo==7) $Exemplo="40230-05.1999.4.01.3800";
			if ($tipo==8) $Exemplo="402300519994013800";
			break;
		case "LAV": 
		case "3808":
			if ($tipo==1) $Exemplo="96.02.00163-1";
			if ($tipo==2) $Exemplo="9602001631";
			if ($tipo==3) $Exemplo="1998.38.02.000018-7";
			if ($tipo==4) $Exemplo="199838020000187";
			if ($tipo==5) $Exemplo="3808";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;		
		case "VGA": 
		case "3809":
			if ($tipo==1) $Exemplo="96.02.00163-1";
			if ($tipo==2) $Exemplo="9602001631";
			if ($tipo==3) $Exemplo="1998.38.02.000018-7";
			if ($tipo==4) $Exemplo="199838020000187";
			if ($tipo==5) $Exemplo="3809";
			if ($tipo==6) $Exemplo="";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;
		case "JF":
		case "3801":
			if ($tipo==1) $Exemplo="96.01.00158-1";
			if ($tipo==2) $Exemplo="9601001581";
			if ($tipo==3) $Exemplo="1999.38.01.000144-9";
			if ($tipo==4) $Exemplo="199938010001449";
			if ($tipo==5) $Exemplo="3801";
			if ($tipo==7) $Exemplo="194-15.1999.4.01.3801";
			if ($tipo==8) $Exemplo="1941519994013801";
			break;
		case "UB":
		case "3802":
			if ($tipo==1) $Exemplo="96.02.00163-1";
			if ($tipo==2) $Exemplo="9602001631";
			if ($tipo==3) $Exemplo="1998.38.02.000018-7";
			if ($tipo==4) $Exemplo="199838020000187";
			if ($tipo==5) $Exemplo="3802";
			if ($tipo==7) $Exemplo="197-98.1998.4.01.3802";
			if ($tipo==8) $Exemplo="1979819984013802";
			break;	
		case "UD":
		case "3803":
			if ($tipo==1) $Exemplo="96.03.00163-5";
			if ($tipo==2) $Exemplo="9603001635";
			if ($tipo==3) $Exemplo="1998.38.03.000068-3";
			if ($tipo==4) $Exemplo="199838030000683";
			if ($tipo==5) $Exemplo="3803";
			if ($tipo==7) $Exemplo="194-43.1998.4.01.3803";
			if ($tipo==8) $Exemplo="1944319984013803";
			break;
		case "PS":
		case "PSS":
		case "3804":
			if ($tipo==1) $Exemplo="89.00.10945-6";
			if ($tipo==2) $Exemplo="8900109456";
			if ($tipo==3) $Exemplo="1999.38.00.040393-6";
			if ($tipo==4) $Exemplo="199938000403936";
			if ($tipo==5) $Exemplo="3804";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;
		case "MCL":
		case "3807":
			if ($tipo==1) $Exemplo="89.00.10945-6";
			if ($tipo==2) $Exemplo="8900109456";
			if ($tipo==3) $Exemplo="1999.38.00.040393-6";
			if ($tipo==4) $Exemplo="199938000403936";
			if ($tipo==5) $Exemplo="3807";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;			
		case "SS":
		case "SSP":
		case "3805":
			if ($tipo==1) $Exemplo="96.02.00163-1";
			if ($tipo==2) $Exemplo="9602001631";
			if ($tipo==3) $Exemplo="1998.38.02.000018-7";
			if ($tipo==4) $Exemplo="199838020000187";
			if ($tipo==5) $Exemplo="3805";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;	
		case "PT":
		case "PMS":
		case "3806":
			if ($tipo==1) $Exemplo="89.00.10945-6";
			if ($tipo==2) $Exemplo="8900109456";
			if ($tipo==3) $Exemplo="1999.38.00.040393-6";
			if ($tipo==4) $Exemplo="199938000403936";
			if ($tipo==5) $Exemplo="3806";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;
		case "PSA":
		case "3810":
			if ($tipo==1) $Exemplo="89.00.10945-6";
			if ($tipo==2) $Exemplo="8900109456";
			if ($tipo==3) $Exemplo="1999.38.00.040393-6";
			if ($tipo==4) $Exemplo="199938000403936";
			if ($tipo==5) $Exemplo="3810";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;
		case "DVL": 
		case "3811":
			if ($tipo==1) $Exemplo="";
			if ($tipo==2) $Exemplo="";
			if ($tipo==3) $Exemplo="";
			if ($tipo==4) $Exemplo="";
			if ($tipo==5) $Exemplo="3811";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;

		case "SLA": 
		case "3812":
			if ($tipo==1) $Exemplo="";
			if ($tipo==2) $Exemplo="";
			if ($tipo==3) $Exemplo="";
			if ($tipo==4) $Exemplo="";
			if ($tipo==5) $Exemplo="3812";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;
			
		case "GVS": 
		case "3813":
			if ($tipo==1) $Exemplo="";
			if ($tipo==2) $Exemplo="";
			if ($tipo==3) $Exemplo="";
			if ($tipo==4) $Exemplo="";
			if ($tipo==5) $Exemplo="3813";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;
		
		case "IIG": 
		case "3814":
			if ($tipo==1) $Exemplo="";
			if ($tipo==2) $Exemplo="";
			if ($tipo==3) $Exemplo="";
			if ($tipo==4) $Exemplo="";
			if ($tipo==5) $Exemplo="3814";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;
			
		case "PA":
		case "PAJE":
		case "3900":
			if ($tipo==1) $Exemplo="96.00.00006-9";
			if ($tipo==2) $Exemplo="9600000069";
			if ($tipo==3) $Exemplo="1998.39.00.001766-8";
			if ($tipo==4) $Exemplo="199839000017668";
			if ($tipo==5) $Exemplo="3900";
			if ($tipo==7) $Exemplo="1762-94.1998.4.01.3900";
			if ($tipo==8) $Exemplo="17629419984013900";
			break;
		case "MB":
		case "3901":
			if ($tipo==1) $Exemplo="96.00.01285-7";
			if ($tipo==2) $Exemplo="9600012857";
			if ($tipo==3) $Exemplo="1998.39.00.004548-8";
			if ($tipo==4) $Exemplo="199839000045488";
			if ($tipo==5) $Exemplo="3901";
			if ($tipo==7) $Exemplo="7-32.1998.4.01.3901";
			if ($tipo==8) $Exemplo="73219984013901";
			break;
		case "ST":
		case "3902":
			if ($tipo==1) $Exemplo="96.00.01228-8";
			if ($tipo==2) $Exemplo="9600012288";
			if ($tipo==3) $Exemplo="1998.39.00.008940-0";
			if ($tipo==4) $Exemplo="199839000089400";		
			if ($tipo==5) $Exemplo="3902";
			if ($tipo==7) $Exemplo="9-96.1998.4.01.3902";
			if ($tipo==8) $Exemplo="99619984013902";
			break;
		case "ATM":
		case "3903": 
			if ($tipo==1) $Exemplo="96.00.01285-7";
			if ($tipo==2) $Exemplo="9600012857";
			if ($tipo==3) $Exemplo="1998.39.00.004548-8";
			if ($tipo==4) $Exemplo="199839000045488";
			if ($tipo==5) $Exemplo="3903";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;
		case "CAH": 
		case "3904":
			if ($tipo==1) $Exemplo="";
			if ($tipo==2) $Exemplo="";
			if ($tipo==3) $Exemplo="";
			if ($tipo==4) $Exemplo="";
			if ($tipo==5) $Exemplo="3904";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;
		case "PI":
		case "4000":
			if ($tipo==1) $Exemplo="89.00.00606-1";
			if ($tipo==2) $Exemplo="8900006061";
			if ($tipo==3) $Exemplo="2000.40.00.005692-8";
			if ($tipo==4) $Exemplo="200040000056928";
			if ($tipo==5) $Exemplo="4000";
			if ($tipo==7) $Exemplo="5694-13.2000.4.01.4000";
			if ($tipo==8) $Exemplo="56941320004014000";
			break;
		case "PIJE":
		case "4000":
			if ($tipo==1) $Exemplo="89.00.00606-1";
			if ($tipo==2) $Exemplo="8900006061";
			if ($tipo==3) $Exemplo="2000.40.00.005692-8";
			if ($tipo==4) $Exemplo="200040000056928";
			if ($tipo==5) $Exemplo="4000";
			if ($tipo==7) $Exemplo="5694-13.2000.4.01.4000";
			if ($tipo==8) $Exemplo="56941320004014000";
			break;
		case "PCZ":
		case "4001":
			if ($tipo==1) $Exemplo="89.00.00606-1";
			if ($tipo==2) $Exemplo="8900006061";
			if ($tipo==3) $Exemplo="2000.40.00.005692-8";
			if ($tipo==4) $Exemplo="200040000056928";
			if ($tipo==5) $Exemplo="4001";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;
		case "RO":
		case "ROJE":
		case "4100":
			if ($tipo==1) $Exemplo="93.00.00805-6";
			if ($tipo==2) $Exemplo="9300008056";
			if ($tipo==3) $Exemplo="1999.41.00.004516-1";
			if ($tipo==4) $Exemplo="199941000045161";
			if ($tipo==5) $Exemplo="4100";
			if ($tipo==7) $Exemplo="4493-11.1999.4.01.4100";
			if ($tipo==8) $Exemplo="44931119994014100";
			break;
		case "JIP": 
		case "4101":
			if ($tipo==1) $Exemplo="93.00.00805-6";
			if ($tipo==2) $Exemplo="9300008056";
			if ($tipo==3) $Exemplo="1999.41.00.004516-1";
			if ($tipo==4) $Exemplo="199941000045161";
			if ($tipo==5) $Exemplo="4101";
			if ($tipo==7) $Exemplo="";
			if ($tipo==8) $Exemplo="";
			break;
		case "RR":
		case "RRJE":
		case "4200":
			if ($tipo==1) $Exemplo="93.00.00485-9";
			if ($tipo==2) $Exemplo="9300004859";
			if ($tipo==3) $Exemplo="2000.42.00.001013-1";
			if ($tipo==4) $Exemplo="200042000010131";
			if ($tipo==5) $Exemplo="4200";
			if ($tipo==7) $Exemplo="1013-79.2000.4.01.4200";
			if ($tipo==8) $Exemplo="10137920004014200";
			break;
		case "TO":
		case "TOJE":
		case "4300":
			if ($tipo==1) $Exemplo="96.00.01153-2";
			if ($tipo==2) $Exemplo="9600011532";
			if ($tipo==3) $Exemplo="1999.43.00.001636-7";
			if ($tipo==4) $Exemplo="199943000016367";
			if ($tipo==5) $Exemplo="4300";
			if ($tipo==7) $Exemplo="1636-71.1999.4.01.4300";
			if ($tipo==8) $Exemplo="16367119994014300";
			break;
		case "TRF1":
		case "1000":
		case "100":
			if ($tipo==1) $Exemplo="89.01.00001-6";
			if ($tipo==2) $Exemplo="8901000016";
			if ($tipo==3) $Exemplo="1997.01.00.008988-8";
			if ($tipo==4) $Exemplo="199701000089888";
			if ($tipo==5) $Exemplo="1000";
			if ($tipo==7) $Exemplo="0011279-23.1997.4.01.0000";
			if ($tipo==8) $Exemplo="00112792319974010000";
			break;
		# NOVOS - 25/04/2006
		case "EUS": 
		case "3310": 
		   if ($tipo==1) $Exemplo="";
		   if ($tipo==2) $Exemplo="";
		   if ($tipo==3) $Exemplo="";
		   if ($tipo==4) $Exemplo="";
		   if ($tipo==5) $Exemplo="3310";
		   if ($tipo==7) $Exemplo="";
		   if ($tipo==8) $Exemplo="";
		   break;
		
		case "ITB": 
		case "3311": 
		   if ($tipo==1) $Exemplo="";
		   if ($tipo==2) $Exemplo="";
		   if ($tipo==3) $Exemplo="";
		   if ($tipo==4) $Exemplo="";
		   if ($tipo==5) $Exemplo="3311";
		   if ($tipo==7) $Exemplo="";
		   if ($tipo==8) $Exemplo="";
		   break;
		
		case "RVD": 
		case "3503": 
		   if ($tipo==1) $Exemplo="";
		   if ($tipo==2) $Exemplo="";
		   if ($tipo==3) $Exemplo="";
		   if ($tipo==4) $Exemplo="";
		   if ($tipo==5) $Exemplo="3503";
		   if ($tipo==7) $Exemplo="";
		   if ($tipo==8) $Exemplo="";
		   break;
		
		case "ACG": 
		case "3504": 
		   if ($tipo==1) $Exemplo="";
		   if ($tipo==2) $Exemplo="";
		   if ($tipo==3) $Exemplo="";
		   if ($tipo==4) $Exemplo="";
		   if ($tipo==5) $Exemplo="3504";
		   if ($tipo==7) $Exemplo="";
		   if ($tipo==8) $Exemplo="";
		   break;
		
		case "SNO": 
		case "3603": 
		   if ($tipo==1) $Exemplo="";
		   if ($tipo==2) $Exemplo="";
		   if ($tipo==3) $Exemplo="";
		   if ($tipo==4) $Exemplo="";
		   if ($tipo==5) $Exemplo="3603";
		   if ($tipo==7) $Exemplo="";
		   if ($tipo==8) $Exemplo="";
		   break;
		
		case "SOE": 
		case "3815": 
		   if ($tipo==1) $Exemplo="";
		   if ($tipo==2) $Exemplo="";
		   if ($tipo==3) $Exemplo="";
		   if ($tipo==4) $Exemplo="";
		   if ($tipo==5) $Exemplo="3815";
		   if ($tipo==7) $Exemplo="";
		   if ($tipo==8) $Exemplo="";
		   break;

		}
	return $Exemplo;
}

function DadoSecao($SecSig,$SecDad){
	/*
	DadosSecao(sigla_do_orgao_com_2_letras,dado_desejado)
	dado_desejado pode ser:
		Sec==> Nome do Órgão
		Cod==> Código do Órgão
		Jus==> Nome da instância da Justiça
		Tel==> Telefone do núcleo judiciário do Órgão
		End==> Endereço da sede do Órgão
		Sed==> Cidade/Estado da sede do Órgão
		Ate==> Horário de atendimento do Órgão
		Sit==> URL do site do Órgão
		Por==> Portaria que autoriza emissão de certidões do Órgão
		Tns==> TNS do oracle do Órgão
		Ema==> email do núcleo judiciário do Órgão
	*/
	switch ($SecSig){
		case "AM":
		case "JFAM":
		case "3200":
			$NomSec="Seção Judiciária do Estado do Amazonas";
			$NomJus="Justiça Federal do Estado do Amazonas";
			$telSec="(92) 214-9104";
			$EndSec="Av.André Araújo, 25 - Aleixo, CEP: 69060-000, Manaus - AM";
			$SedSec="Manaus - AM";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.am.trf1.gov.br";
			$PorSec="301/04-SECAD/DIREF";
			$CodSec="3200";
			$TnsSec="JFAM";
			$EmaSec="nucju@am.trf1.gov.br ";
			break;
		case "AMJE":
		case "32JE":
			$NomSec="Juizado Especial Federal do Estado do Amazonas";
			$NomJus="Justiça Federal do Estado do Amazonas";
			$telSec="(92) 214-9104";
			$EndSec="Av.André Araújo, 25 - Aleixo, CEP: 69060-000, Manaus - AM";
			$SedSec="Manaus - AM";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.am.trf1.gov.br";
			$PorSec="301/04-SECAD/DIREF";
			$CodSec="3200";
			$TnsSec="JFAM";
			$EmaSec="nucju@am.trf1.gov.br ";
			break;
		case "TB":
		case "TBT":
		case "3201":
			$NomSec="Subseção Judiciária de Tabatinga";
			$NomJus="Justiça Federal do Estado do Amazonas";
			$telSec="(92) 412-4858";
			$EndSec="Rua Aires da Cunha s/n, Bairro Ibirapuera, CEP 69240-000";
			$SedSec="Tabatinga - AM";
			$AteSec="das 8:00 &agrave;s 18:00 hs";
			$SitSec="www.am.trf1.gov.br";
			$PorSec="301/04-SECAD/DIREF";
			$CodSec="3201";
			$TnsSec="TBT";
			$EmaSec="01vara.tbt@am.trf1.gov.br ";
			break;
		case "AC":
		case "JFAC":
		case "3000":
			$NomSec="Seção Judiciária do Estado do Acre";
			$NomJus="Justiça Federal do Estado do Acre";
			$telSec="(68) 214-2044";
			$EndSec=" Rua Min. Ilmar Nascimento Galvão, s/n, BR 364, Km 02,<BR>CEP: 69915-900, Rio Branco-AC";
			$SedSec="Rio Branco - AC";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.ac.trf1.gov.br";
			$PorSec="109/04-DIREF";
			$TnsSec="JFAC";
			$CodSec="3000";
			$EmaSec="sepce@ac.trf1.gov.br ";
			break;
		case "ACJE":
		case "30JE":
			$NomSec="Juizado Especial Federal do Estado do Acre";
			$NomJus="Justiça Federal do Estado do Acre";
			$telSec="(68) 214-2044";
			$EndSec=" Rua Min. Ilmar Nascimento Galvão, s/n, BR 364, Km 02,<BR>CEP: 69915-900, Rio Branco-AC";
			$SedSec="Rio Branco - AC";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.ac.trf1.gov.br";
			$PorSec="109/04-DIREF";
			$TnsSec="JFAC";
			$CodSec="3000";
			$EmaSec="sepce@ac.trf1.gov.br ";
			break;
		case "AP":
		case "JFAP":
		case "3100":
			$NomSec="Seção Judiciária do Estado do Amapá";
			$NomJus="Justiça Federal do Estado do Amapá";
			$telSec="(96) 214-1531";
			$EndSec="Av FAB, 1374 - Centro, CEP: 68906-430, Macapá-AP";
			$SedSec="Macapá - AP";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.ap.trf1.gov.br";
			$PorSec="141/04-SECAD/DIREF";
			$TnsSec="JFAP";
			$CodSec="3100";
			$EmaSec="nucju@ap.trf1.gov.br ";
			break;
		case "APJE":
		case "31JE":
			$NomSec="Juizado Especial Federal do Estado do Amapá";
			$NomJus="Justiça Federal do Estado do Amapá";
			$telSec="(96) 214-1531";
			$EndSec="Av FAB, 1374 - Centro, CEP: 68906-430, Macapá-AP";
			$SedSec="Macapá - AP";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.ap.trf1.gov.br";
			$PorSec="141/04-SECAD/DIREF";
			$TnsSec="JFAP";
			$CodSec="3100";
			$EmaSec="nucju@ap.trf1.gov.br ";
			break;
		case "BA":
		case "JFBA":
		case "3300":
			$NomSec="Seção Judiciária do Estado da Bahia";
			$NomJus="Justiça Federal do Estado da Bahia";
			$EndSec="Av. Ulysses Guimarães, 2631 - Sussuarana<BR>Centro Administrativo da Bahia, Fórum Teixeira de Freitas,<BR>CEP: 41213-000,  Salvador-BA";
			$telSec="(71) 372-2187";
			$SedSec="Salvador - BA";
			$AteSec="das 11:00 &agrave;s 16:00 hs";
			$SitSec="www.ba.trf1.gov.br";
			$PorSec="381/04-DIREF";
			$TnsSec="JFBA";
			$CodSec="3300";
			$EmaSec="nucju@ba.trf1.gov.br ";
			break;
		case "BAJE":
		case "34JE":
			$NomSec="Juizado Especial Federal da Bahia";
			$NomJus="Justiça Federal do Estado da Bahia";
			$EndSec="Av. Ulysses Guimarães, 2631 - Sussuarana<BR>Centro Administrativo da Bahia, Fórum Teixeira de Freitas,<BR>CEP: 41213-000,  Salvador-BA";
			$telSec="(71) 372-2187";
			$SedSec="Salvador - BA";
			$AteSec="das 11:00 &agrave;s 16:00 hs";
			$SitSec="www.ba.trf1.gov.br";
			$PorSec="381/04-DIREF";
			$TnsSec="JFBA";
			$CodSec="3300";
			$EmaSec="nucju@ba.trf1.gov.br ";
			break;
		case "IL":
		case "ILS":
		case "3301":
			$NomSec="Subseção Judiciária de Ilhéus";
			$NomJus="Justiça Federal do Estado da Bahia";
			$EndSec= "Rua Ministro José Cândido, nº 80 - Centro<BR>CEP: 45650-000, Ilhéus - BA";
			$telSec=" (73) 634-2950 - Ramal 38";//"(73) 634-7225 / 634-7225";
			$SedSec="Ilhéus - BA";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.ba.trf1.gov.br";
			$PorSec="381/04-DIREF";
			$TnsSec="(DESCRIPTION = (SDU = 1460) (TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = ils.trf1.gov.br) (INSTANCE_NAME = ils)))";
			$CodSec="3301";
			$EmaSec="sepju.ils@ba.trf1.gov.br";
			break;
		case "CFS":
		case "3302":
			$NomSec="Subseção Judiciária de Campo Formoso";
			$NomJus="Justiça Federal do Estado da Bahia";
			$EndSec="Praça da Bandeira nº 95 centro, Campo Formoso-BA ";
			$telSec="(77) 3611-8896";
			$SedSec="Campo Formoso - BA";
			$AteSec="das 09:00 &agrave;s 18:00 hs";
			$SitSec="www.ba.trf1.gov.br";
			$PorSec="PRESI/600-453";
			$TnsSec="(DESCRIPTION = (SDU = 1460) (TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = ils.trf1.gov.br) (INSTANCE_NAME = ils)))";
			$CodSec="3302";
			$EmaSec="01vara.cfs@trf1.gov.br ";
			break;
		case "BES":
		case "3303":
			$NomSec="Subseção Judiciária de Barreiras";
			$NomJus="Justiça Federal do Estado da Bahia";
			$EndSec="Rua Aratu,10 - Loteamento Aratu - Barreiras/BA  <br>CEP 40.804-180, Barreiras-BA";
			$telSec="(77) 3611-8896";
			$SedSec="Barreiras - BA";
			$AteSec="das 09:00 &agrave;s 18:00 hs";
			$SitSec="www.ba.trf1.gov.br";
			$PorSec="PRESI/600-504";
			$TnsSec="(DESCRIPTION = (SDU = 1460) (TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = ils.trf1.gov.br) (INSTANCE_NAME = ils)))";
			$CodSec="3303";
			$EmaSec="01vara.bes@trf1.gov.br ";
			break;
		case "FSA":
		case "3304":
			$NomSec="Subseção Judiciária de Feira de Santana";
			$NomJus="Justiça Federal do Estado da Bahia";
			$EndSec="Rua Santos, nº 380, Caseb <br>CEP: 40040 - 040, Feira de Santana – BA";
			$telSec="(75) 3221-6274";
			$SedSec="Feira de Santana - BA";
			$AteSec="das 09:00 &agrave;s 18:00 hs";
			$SitSec="www.ba.trf1.gov.br";
			$PorSec="600-18 de 28/06/2005";
			$TnsSec="(DESCRIPTION = (SDU = 1460) (TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = ils.trf1.gov.br) (INSTANCE_NAME = ils)))";
			$CodSec="3304";
			$EmaSec="01vara.fsa@trf1.gov.br ";
			break;
		case "JZR":
		case "3305":
			$NomSec="Subseção Judiciária de Juazeiro";
			$NomJus="Justiça Federal do Estado da Bahia";
			$EndSec="Rua Dom Pedro I, s/n – Bairro João XXIII<br>CEP 48.900-230, Juazeiro-BA";
			$telSec="(74) 3613-7402, (74) 3611-3961";
			$SedSec="Juazeiro - BA";
			$AteSec="das 09:00 &agrave;s 18:00 hs";
			$SitSec="www.ba.trf1.gov.br";
			$PorSec="600-018 de 28/06/2005";
			$TnsSec="(DESCRIPTION = (SDU = 1460) (TDU = 1460)(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1521)) (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.217)(PORT = 1526)))(CONNECT_DATA = (SERVICE_NAME = ils.trf1.gov.br) (INSTANCE_NAME = ils)))";
			$CodSec="3305";
			$EmaSec="01vara.jzr@trf1.gov.br ";
			break;
		case "PAF":
		case "3306":
			$NomSec=" Subseção Judiciária de Paulo Afonso";
			$NomJus="Justiça Federal do Estado da Bahia";
			$telSec="";
			$EndSec="Rua do Gangorra n. 148, quadra 12, Acampamento CHESF, Bairro Alves de Souza";
			$SedSec="Paulo Afonso - BA";
			$AteSec="das 9:00 às 18:00 hs";
			$SitSec="www.BA.trf1.gov.br";
			$PorSec="";
			$CodSec="3306";
			$TnsSec="PAF";
			$EmaSec="01vara.PAF@trf1.gov.br";
			break;

		case "VCA":
		case "3307":
			$NomSec=" Subseção Judiciária de Vitória da Conquista";
			$NomJus="Justiça Federal do Estado da Bahia";
			$telSec="";
			$EndSec="Av. Sete de Setembro nº 37. CEP: 45.015-000";
			$SedSec="Vitoria da Conquista - BA";
			$AteSec="das 9:00 às 18:00 hs";
			$SitSec="www.BA.trf1.gov.br";
			$PorSec="";
			$CodSec="3307";
			$TnsSec="VCA";
			$EmaSec="01vara.VCA@trf1.gov.br";
			break;
		case "JEE":
		case "3308":
			$NomSec=" Subseção Judiciária de Jequié";
			$NomJus="Justiça Federal do Estado Seção Judiciária do Estado da Bahia";
			$telSec="(73) 3525-6355";
			$EndSec="R. Laudelino Barreto, S/N , 2º Andar Centro.";
			$SedSec="Jequié/BA";
			$AteSec="das 9:00 às 18:00 hs";
			$SitSec="www.BA.trf1.gov.br";
			$PorSec="";
			$CodSec="3308";
			$TnsSec="JEE";
			$EmaSec="01vara.JEE@trf1.gov.br";
			break;

		case "GNB":
		case "3309":
			$NomSec=" Subseção Judiciária de Guanambi";
			$NomJus="Justiça Federal do Estado Seção Judiciária do Estado da Bahia";
			$telSec="";
			$EndSec="Av. Santos Dumont, n. 325, Centro.<br>CEP:46.430-000.";
			$SedSec="Guanambi/BA";
			$AteSec="das 9:00 às 18:00 hs";
			$SitSec="www.BA.trf1.gov.br";
			$PorSec="";
			$CodSec="3309";
			$TnsSec="GNB";
			$EmaSec="01vara.GNB@trf1.gov.br";
			break;

		case "DF":
		case "JFDF":
		case "3400":
			$NomSec="Seção Judiciária do Distrito Federal";
			$NomJus="Justiça Federal do Distrito Federal";
			$EndSec= "SAS, Quadra 02, bloco G, lote 08, Anexo A, CEP:70040-000, BRAS&Iacute;LIA - DF";
			$telSec="(61) 3221-6000";
			$SedSec="Brasília - DF";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.jfdf.jus.br";
			$PorSec="347/04-DIREF";
			$TnsSec="JFDF";
			$CodSec="3400";
			$EmaSec="nucju@df.trf1.gov.br ";
			break;
		case "DFJE":
		case "34JE":
			$NomSec="Juizado Especial Federal do Distrito Federal";
			$NomJus="Justiça Federal do Distrito Federal";
			$EndSec= "SAS, Quadra 02, bloco G, lote 08, Anexo A,<BR>CEP:70040-000, BRAS&Iacute;LIA - DF";
			$telSec="(61) 3221-6000";
			$SedSec="Brasília - DF";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.jfdf.jus.br";
			$PorSec="347/04-DIREF";
			$TnsSec="JFDF";
			$CodSec="3400";
			$EmaSec="nucju@df.trf1.gov.br ";
			break;
		case "GO":
		case "JFGO":
		case "3500":
			$NomSec="Seção Judiciária do Estado de Goiás";
			$NomJus="Justiça Federal do Estado de Goiás";
			$EndSec="Rua 19, nº 244 - Centro, CEP: 74030-090, Goiânia-GO";
			$telSec="(62) 224-1549";
			$SedSec="Goiânia - GO";
			$AteSec="das 9:00 &agrave;s 17:00 hs";
			$SitSec="www.go.trf1.gov.br";
			$PorSec="561/04-DIREF";
			$TnsSec="JFGO";
			$CodSec="3500";
			$EmaSec="nucju@go.trf1.gov.br ";
			break;
		case "LZA":
		case "3501":
			$NomSec="Subseção Judiciária de Luziânia";
			$NomJus="Justiça Federal do Estado de Goiás";
			$telSec="(61) 3622-5368";
			$EndSec="Rua Santíssimo Sacramento, nº 179. CEP:72800-280";
			$SedSec="Luziânia - GO";
			$AteSec="das 9:00 às 18:00 hs";
			$SitSec="www.go.trf1.gov.br";
			$PorSec="";
			$CodSec="3501";
			$TnsSec="LZA";
			$EmaSec="01vara.LZA@trf1.gov.br";
			break;

		case "ANS":
		case "3502":
			$NomSec="Subseção Judiciária de Anápolis";
			$NomJus="Justiça Federal do Estado de Goiás";
			$telSec="(62) 3321-1718";
			$EndSec="Avenida Pinheiro Chagas, QE, lt.17 e Rua João José, QE, Lt. 18 Bairro Jundiaí. CEP: 75.110-350";
			$SedSec="Anápolis - GO";
			$AteSec="das 9:00 às 18:00 hs";

			$SitSec="www.GO.trf1.gov.br";
			$PorSec="";
			$CodSec="3502";
			$TnsSec="ANS";
			$EmaSec="01vara.ans@trf1.gov.br";
			break;

		case "MA":
		case "JFMA":
		case "MAJE":
		case "3700":
			$NomSec="Seção Judiciária do Estado do Maranhão";
			$NomJus="Justiça Federal do Estado do Maranhão";
			$EndSec="Av Senador Vitorino Freire, s/n - Areinha<BR>CEP: 65010-650, São Luís/MA";
			$telSec="( 98) 214-5756";
			$SedSec="São Luiz - MA";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.ma.trf1.gov.br";
			$PorSec="379/04-DIREF";
			$TnsSec="JFMA";
			$CodSec="3700";
			$EmaSec="nucju@ma.trf1.gov.br ";
			break;
		case "IM":
		case "ITZ":
		case "3701":
			$NomSec="Subseção Judiciária de Imperatriz";
			$NomJus="Justiça Federal do Estado do Maranhão";
			$EndSec="Rua Rafael Almeida Ribeiro, 750 - Bairro São Salvador<BR>CEP: 65916-200, Imperatriz/MA";
			$telSec="(99) 523-3775";
			$SedSec="Imperatriz - MA";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.ma.trf1.gov.br";
			$PorSec="379/04-DIREF";
			$TnsSec="ITZ";
			$CodSec="3701";
			$EmaSec="nucju@ma.trf1.gov.br ";
			break;
		case "CX":
		case "CXS":
		case "3702":
			$NomSec="Subseção Judiciária de Caxias";
			$NomJus="Justiça Federal do Estado do Maranhão";
			$EndSec="Praça Vespasiano Ramos, 743 – Centro <BR>CEP: 65600-100, Caxias/MA";
			$telSec="(99) 3521-4883";
			$SedSec="Caxias - MA";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.ma.trf1.gov.br";
			$PorSec="379/04-DIREF";
			$TnsSec="JFMA";
			$CodSec="3702";
			$EmaSec="nucju@ma.trf1.gov.br ";
			break;
		case "MT":
		case "JFMT":
		case "3600":
			$NomSec="Seção Judiciária do Estado de Mato Grosso";
			$NomJus="Justiça Federal do Estado de Mato Grosso";
			$EndSec="Av. Rubens de Mendonça, 1.731 - Centro Empresarial Paiaguás<br>Bairro Bosque da Saúde - CEP: 78050-000, Cuiabá/MT";
			$telSec="(65) 614-5779";
			$SedSec="Cuiabá - MT";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.mt.trf1.gov.br";
			$PorSec="130/04-DIREF";
			$TnsSec="JFMT";
			$CodSec="3600";
			$EmaSec="sepce@mt.trf1.gov.br ";
			break;
		case "MTJE":
		case "36JE":
			$NomSec="Juizado Especial Federal do Estado de Mato Grosso";
			$NomJus="Justiça Federal do Estado de Mato Grosso";
			$EndSec="Av. Rubens de Mendonça, 1.731 - Centro Empresarial Paiaguás<br>Bairro Bosque da Saúde - CEP: 78050-000, Cuiabá/MT";
			$telSec="(65) 614-5779";
			$SedSec="Cuiabá - MT";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.mt.trf1.gov.br";
			$PorSec="130/04-DIREF";
			$TnsSec="JFMT";
			$CodSec="3600";
			$EmaSec="sepce@mt.trf1.gov.br ";
			break;
		case "CC":
		case "CCS":
		case "3601":
			$NomSec="Subseção Judiciária de Cáceres";
			$NomJus="Justiça Federal do Estado de Mato Grosso";
			$EndSec="Av. Enedino Sebastião Martins, nº. 710<br>Centro. CEP 78 200-000, Cáceres-MT ";
			$telSec="(65) 3211 6100 - Protocolo e Portaria<br>(65) 3211 6117 - Secretaria<br>(65) 32116107 - Administração";
			$SedSec="Cáceres - MT";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.mt.trf1.gov.br";
			$PorSec="166/05-DIREF";
			$TnsSec="JFMT";
			$CodSec="3601";
			$EmaSec="01vara.ccs@trf1.gov.br";
			break;
		case "ROI":
		case "3602":
			$NomSec=" Subseção Judiciária de Rondonópolis";
			$NomJus="Justiça Federal do Estado Seção Judiciária do Estado de Mato Grosso";
			$telSec="";
			$EndSec="";
			$SedSec="";
			$AteSec="das 9:00 às 18:00 hs";
			$SitSec="www.MT.trf1.gov.br";
			$PorSec="";
			$CodSec="3602";
			$TnsSec="ROI";
			$EmaSec="01vara.ROI@trf1.gov.br";
			break;
		case "MG":
		case "JFMG":
		case "3800":
			$NomSec="Seção Judiciária do Estado de Minas Gerais";
			$NomJus="Justiça Federal do Estado de Minas Gerais";
			$EndSec= "Av. Álvares Cabral, 1807 - Bairro Santo Agostinho,<BR>CEP: 30170-001, Belo Horizonte-MG";
			$telSec="(31) 2129-6502";
			$SedSec="Belo Horizonte - MG";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.mg.trf1.gov.br";
			$PorSec="851/04-DIREF";
			$TnsSec="JFMG";
			$CodSec="3800";
			$EmaSec="nucju@mg.trf1.gov.br ";
			break;
		case "LAV":
		case "3808":
			$NomSec=" Subseção Judiciária de Lavras";
			$NomJus="Justiça Federal do Estado de Minas Gerais";
			$telSec="(35) 3831-6638/1966";
			$EndSec="Rua Kennedy dos Santos, nº 40. CEP: 37.200-000";
			$SedSec="Lavras - MG";
			$AteSec="das 9:00 às 18:00 hs";
			$SitSec="www.MG.trf1.gov.br";
			$PorSec="";
			$CodSec="3808";
			$TnsSec="LAV";
			$EmaSec="01vara.lav@trf1.gov.br";
			break;

		case "VGA":
		case "3809":
			$NomSec=" Subseção Judiciária de Varginha";
			$NomJus="Justiça Federal do Estado de Minas Gerais";
			$telSec="(35) 2105-8103/8101";
			$EndSec="Rua Delfim Moreira 451, Centro. CEP: 37.002-070";
			$SedSec="Varginha - MG";
			$AteSec="das 9:00 às 18:00 hs";
			$SitSec="www.MG.trf1.gov.br";
			$PorSec="";
			$CodSec="3809";
			$TnsSec="VGA";
			$EmaSec="01vara.VGA@trf1.gov.br";
			break;
		case "JF":
		case "JFO":
		case "JFA":
		case "3801":
			$NomSec="Subseção Judiciária de Juiz de Fora";
			$NomJus="Justiça Federal do Estado de Minas Gerais";
			$EndSec="Rua Espírito Santo, 1115, Ed. Alber Ganimi - Centro,<BR>CEP: 36010-040, Juiz de Fora-MG";
			$telSec="(32) 3249-1535";
			$SedSec="Juiz de Fora - MG";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.mg.trf1.gov.br";
			$PorSec="851/04-DIREF";
			$TnsSec="JFO";
			$CodSec="3801";
			$EmaSec="nucju@mg.trf1.gov.br ";
			break;

		case "UB":
		case "UBA":
		case "UBE":
		case "3802":
			$NomSec="Subseção Judiciária de Uberaba";
			$NomJus="Justiça Federal do Estado de Minas Gerais";
			$EndSec="Rua Luiz Soares, 529 - Bairro Fabrício,<BR>CEP: 38.065-260, Uberaba-MG";
			$telSec="(34) 3318-2707";
			$SedSec="Uberaba - MG";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.mg.trf1.gov.br";
			$PorSec="851/04-DIREF";
			$TnsSec="UBE";
			$CodSec="3802";
			$EmaSec="nucju@mg.trf1.gov.br ";
			break;

		case "UD":
		case "UDI":
		case "UBI":
		case "UL":
		case "3803":
			$NomSec="Subseção Judiciária de Uberlândia";
			$NomJus="Justiça Federal do Estado de Minas Gerais";
			$EndSec="Av. Cesário Alvim, 3390 - Bairro Brasil,<BR>CEP: 38400-696, Uberlândia_MG";
			$telSec="(34) 3233-7608";
			$SedSec="Uberlândia - MG";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.mg.trf1.gov.br";
			$PorSec="851/04-DIREF";
			$TnsSec="UDI";
			$CodSec="3803";
			$EmaSec="nucju@mg.trf1.gov.br ";
			break;

		case "PS":
		case "PSS":
		case "3804":
			$NomSec="Subseção Judiciária de Passos";
			$NomJus="Justiça Federal do Estado de Minas Gerais";
			$EndSec="Av. Arlindo Figueiredo, 128 – Centro,<BR>37902-026 – Passos/MG";
			$telSec="(35) 3522-7427";
			$SedSec="Passos - MG";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.mg.trf1.gov.br";
			$PorSec="851/04-DIREF";
			$TnsSec="PSS";
			$CodSec="3804";
			$EmaSec="nucju@mg.trf1.gov.br ";
			break;
		case "SS":
		case "SSP":
		case "3805":
			$NomSec="Subseção Judiciária de São Sebastião do Paraíso";
			$NomJus="Justiça Federal do Estado de Minas Gerais";
			$EndSec= "Rua Delfim Moreira, 1804 - Bairro Centro. CEP: 37.950-000";
			$telSec="(35) 3558-9178 ";
			$SedSec="São Sebastião do Paraíso - MG";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.mg.trf1.gov.br";
			$PorSec="600-358 de 20/07/05";
			$TnsSec="UBE";
			$CodSec="3805";
			$EmaSec="nucju@mg.trf1.gov.br ";
			break;
		case "PT":
		case "PMS":
		case "3806":
			$NomSec="Subseção Judiciária de Patos de Minas";
			$NomJus="Justiça Federal do Estado de Minas Gerais";
			$EndSec= "Rua Major Gote, 1127. Bairro Centro. CEP: 38.700-001";
			$telSec="(34) 3821-9982";
			$SedSec="Patos de Minas - MG";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.mg.trf1.gov.br";
			$PorSec="600-374 de 04/08/05";
			$TnsSec="UBE";
			$CodSec="3806";
			$EmaSec="nucju@mg.trf1.gov.br ";
			break;
		case "MCL":
		case "3807":
			$NomSec="Subseção Judiciária de Montes Claros";
			$NomJus="Justiça Federal do Estado de Minas Gerais";
			$EndSec="Av. Deputado Esteves Rodrigues, 1.111 <BR>Bairro Todos os Santos. CEP: 39.400-215<br>"
					." – Montes Claros/MG";
			$telSec="(38) 2101-8200";
			$SedSec="Montes Claros - MG";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.mg.trf1.gov.br";
			$PorSec="600-508 de 22/09/2005";
			$TnsSec="MCL";
			$CodSec="3807";
			$EmaSec="nucju@mg.trf1.gov.br ";
			break;
		case "PSA":
		case "3810":
			$NomSec="Subseção Judiciária de Pouso Alegre";
			$NomJus="Justiça Federal do Estado de Minas Gerais";
			$EndSec="Rua Santo Antônio, 105. Bairro Centro.<br>CEP 37.550-000"
					." – Pouso Alegre/MG";
			$telSec="(35) 3421-9506";
			$SedSec="Pouso Alegre - MG";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.mg.trf1.gov.br";
			$PorSec="600-616 de 14/11/2005";
			$TnsSec="PSA";
			$CodSec="3810";
			$EmaSec="01vara.psa@trf1.gov.br ";
			break;
		case "DVL":
		case "3811":
			$NomSec=" Subseção Judiciária de Divinópolis";
			$NomJus="Justiça Federal do Estado de Minas Gerais";
			$telSec="";
			$EndSec="Praça Dom Cristiano 298, Centro, ";
			$SedSec="Divinópolis - MG";
			$AteSec="das 9:00 às 18:00 hs";
			$SitSec="www.MG.trf1.gov.br";
			$PorSec="";
			$CodSec="3811";
			$TnsSec="DVL";
			$EmaSec="01vara.DVL@trf1.gov.br";
			break;
		case "SLA":
		case "3812":
			$NomSec=" Subseção Judiciária de Sete Lagoas";
			$NomJus="Justiça Federal do Estado Seção Judiciária do Estado de Minas Gerais";
			$telSec="";
			$EndSec="";
			$SedSec="";
			$AteSec="das 9:00 às 18:00 hs";
			$SitSec="www.MG.trf1.gov.br";
			$PorSec="";
			$CodSec="3812";
			$TnsSec="SLA";
			$EmaSec="01vara.SLA@trf1.gov.br";
			break;

		case "GVS":
		case "3813":
			$NomSec=" Subseção Judiciária de Governador Valadares";
			$NomJus="Justiça Federal do Estado Seção Judiciária do Estado de Minas Gerais";
			$telSec="";
			$EndSec="Praça Serra Lima, 560.<br>Bairro Centro<br>CEP: 35.010-250";
			$SedSec="Governador Valadares - MG";
			$AteSec="das 9:00 às 18:00 hs";
			$SitSec="www.MG.trf1.gov.br";
			$PorSec="Portaria Presi N. 600-059 de 02.02.2006";
			$CodSec="3813";
			$TnsSec="GVS";
			$EmaSec="01vara.GVS@trf1.gov.br";
			break;

		case "IIG":
		case "3814":
			$NomSec=" Subseção Judiciária de Ipatinga";
			$NomJus="Justiça Federal do Estado Seção Judiciária do Estado de Minas Gerais";
			$telSec="";
			$EndSec="Av. Selim José de Sales, 895<br>Bairro Canaã<br>CEP: 35.164-213";
			$SedSec="Ipatinga - MG";
			$AteSec="das 9:00 às 18:00 hs";
			$SitSec="www.MG.trf1.gov.br";
			$PorSec="Portaria Presi N. 600-058 de 02.02.2006 ";
			$CodSec="3814";
			$TnsSec="IIG";
			$EmaSec="01vara.IIG@trf1.gov.br";
			break;

		case "PA":
		case "JFPA":
		case "PAJE":
		case "39JE":
		case "3900":
			$NomSec="Seção Judiciária do Estado do Pará";
			$NomJus="Justiça Federal do Estado do Pará";
			$EndSec= "Rua Domingos Marreiros, 598 - Bairro Umarizal,<BR>CEP: 66055-210, Belém-PA";
			$telSec="(91) 242-0183";
			$SedSec="Belém - PA";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.pa.trf1.gov.br";
			$PorSec="170/04-DIREF";
			$TnsSec="JFPA";
			$CodSec="3900";
			$EmaSec="nucju@pa.trf1.gov.br ";
			break;
		case "ATM":
		case "3903":
			$NomSec=" Subseção Judiciária de Altamira";
			$NomJus="Justiça Federal do Estado do Pará";
			$telSec="(93) 3515-2422";
			$EndSec="Av. Tancredo Neves n. 100, Bairro Premem Centro - PA. CEP: 68.372-590";
			$SedSec="Altamira - PA";
			$AteSec="das 9:00 às 18:00 hs";
			$SitSec="www.PA.trf1.gov.br";
			$PorSec="";
			$CodSec="3903";
			$TnsSec="ATM";
			$EmaSec="01vara.ATM@trf1.gov.br";
			break;

		case "MB":
		case "3901":
			$NomSec="Subseção Judiciária de Marabá";
			$NomJus="Justiça Federal do Estado do Pará";
			$EndSec="Praça do Mogno, 6.665 - Agrópolis Amapá<br>CEP: 68502-610, Marabá/PA";
			$telSec="(91) 242-0055 / 242-0255";
			$SedSec="Marabá - PA";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.pa.trf1.gov.br";
			$PorSec="170/04-DIREF";
			$TnsSec="MBA";
			$CodSec="3901";
			$EmaSec="nucju@pa.trf1.gov.br ";
			break;
		case "ST":
		case "3902":
			$NomSec="Subseção Judiciária de Santarém";
			$NomJus="Justiça Federal do Estado do Pará";
			$EndSec="Av. Marechal Rondon, s/n, esquina com Av. Curuá-Una<br>CEP:68005-120, Santarém/PA";
			$telSec="(91) 242-0055 / 242-0255";
			$SedSec="Santarém - PA";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.pa.trf1.gov.br";
			$PorSec="170/04-DIREF";
			$TnsSec="STM";
			$CodSec="3902";
			$EmaSec="nucju@pa.trf1.gov.br ";
			break;
		case "CAH":
		case "3904":
			$NomSec="Subseção Judiciária de Castanhal";
			$NomJus="Justiça Federal do Estado do Pará";
			$telSec="(91)3711-7444/3711-4200";
			$EndSec="Rua Quintino Bocaiúva 2363, Bairro Centro. CEP: 68.743-010";
			$SedSec="Castanhal - PA";
			$AteSec="das 9:00 às 18:00 hs";
			$SitSec="www.MB.trf1.gov.br";
			$PorSec="";
			$CodSec="3904";
			$TnsSec="CAH";
			$EmaSec="01vara.CAH@trf1.gov.br";
			break;

		case "PI":
		case "JFPI":
		case "4000":
			$NomSec="Seção Judiciária do Estado do Piauí";
			$NomJus="Justiça Federal do Estado do Piauí";
			$EndSec= "Av. Antonio Freire, 1.473 - Centro,<BR>CEP: 64001-040, Teresina/PI";
			$telSec="(86) 215-1111 / 215-1127";
			$SedSec="Teresina - PI";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.pi.trf1.gov.br";
			$PorSec="381/04-DIREF";
			$TnsSec="JFPI";
			$CodSec="4000";
			$EmaSec="nucju@pi.trf1.gov.br ";
			break;
		case "PCZ":
		case "4001":
			$NomSec="Subseção Judiciária de Picos";
			$NomJus="Justiça Federal do Estado do Piauí";
			$EndSec= "Rua Santo Antônio, 74-A, Centro,<BR>CEP: 64.600-000, Picos/PI";
			$telSec="(89) 3422-2656";
			$SedSec="Picos - PI";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.pi.trf1.gov.br";
			$PorSec="";
			$TnsSec="JFPI";
			$CodSec="4001";
			$EmaSec="01vara.pcz@trf1.gov.br";
			break;
		case "PIJE":
		case "40JE":
			$NomSec="Juizado Especial Federal do Estado do Piauí";
			$NomJus="Justiça Federal do Estado do Piauí";
			$EndSec= "Av. Antonio Freire, 1.473 - Centro,<BR>CEP: 64001-040, Teresina/PI";
			$telSec="(86) 215-1111 / 215-1127";
			$SedSec="Teresina - PI";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.pi.trf1.gov.br";
			$PorSec="381/04-DIREF";
			$TnsSec="JFPI";
			$CodSec="4000";
			$EmaSec="nucju@pi.trf1.gov.br ";
			break;
		case "RO":
		case "JFRO":
		case "4100":
			$NomSec="Seção Judiciária do Estado de Rondônia";
			$NomJus="Justiça Federal do Estado de Rondônia";
			$telSec="(69) 211-2472 / 211-2419";
			$EndSec="Av. Presidente Dutra, 2.203 - Centro<BR>CEP: 78916-120, Porto Velho/RO";
			$SedSec="Porto Velho - RO";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.ro.trf1.gov.br";
			$PorSec="148/04-DIREF";
			$TnsSec="JFRO";
			$CodSec="4100";
			$EmaSec="nucju@ro.trf1.gov.br ";
			break;
		case "ROJE":
		case "41JE":
			$NomSec="Juizado Especial Federal do Estado de Rondônia";
			$NomJus="Justiça Federal do Estado de Rondônia";
			$telSec="(69) 211-2472 / 211-2419";
			$EndSec="Av. Presidente Dutra, 2.203 - Centro<BR>CEP: 78916-120, Porto Velho/RO";
			$SedSec="Porto Velho - RO";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.ro.trf1.gov.br";
			$PorSec="148/04-DIREF";
			$TnsSec="JFRO";
			$CodSec="4100";
			$EmaSec="nucju@ro.trf1.gov.br ";
			break;
		case "JIP":
			case "4101":
			$NomSec=" Subseção Judiciária de Ji-paraná";
			$NomJus="Justiça Federal do Estado Seção Judiciária do Estado de Rondônia";
			$telSec="";
			$EndSec="Av. Marechal Rondom, Nº 935. Entre a Av. 6 de maio e a Av. Almirante Barroso - RO. 78.961-670";
			$SedSec="Ji-Paraná - RO";
			$AteSec="das 9:00 às 18:00 hs";
			$SitSec="www.RO.trf1.gov.br";
			$PorSec="";
			$CodSec="4101";
			$TnsSec="JIP";
			$EmaSec="01vara.JIP@trf1.gov.br";
			break;
		case "RR":
		case "JFRR":
		case "4200":
			$NomSec="Seção Judiciária do Estado de Roraima";
			$NomJus="Justiça Federal do Estado de Roraima";
			$telSec="(95) 621-4237 / 621-4247";
			$EndSec="Av. Getúlio Vargas, 3.999 - Bairro Canarinho<BR>CEP: 69306-150, Boa Vista/RR ";
			$SedSec="Boa Vista - RR";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.rr.trf1.gov.br";
			$PorSec="155/04-DIREF";
			$TnsSec="JFRR";
			$CodSec="4200";
			$EmaSec="nucju@rr.trf1.gov.br ";
			break;
		case "RRJE":
		case "42JE":
			$NomSec="Juizado Especial Federal do Estado de Roraima";
			$NomJus="Justiça Federal do Estado de Roraima";
			$telSec="(95) 621-4237 / 621-4247";
			$EndSec="Av. Getúlio Vargas, 3.999 - Bairro Canarinho<BR>CEP: 69306-150, Boa Vista/RR ";
			$SedSec="Boa Vista - RR";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.rr.trf1.gov.br";
			$PorSec="155/04-DIREF";
			$TnsSec="JFRR";
			$CodSec="4200";
			$EmaSec="nucju@rr.trf1.gov.br ";
			break;

		case "TO":
		case "JFTO":
		case "4300":
			$NomSec="Seção Judiciária do Estado de Tocantins";
			$NomJus="Justiça Federal do Estado de Tocantins";
			$telSec="(63) 218 3851 / Fax: (63) 218 3808";
			$EndSec="AANO 20, Conjunto 01, Lotes 3/4 - centro<br>CEP 77001-128, Palmas - TO";
			$SedSec="Palmas - TO";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.to.trf1.gov.br";
			$PorSec="101/04-DIREF";
			$TnsSec="JFTO";
			$CodSec="4300";
			$EmaSec="sepce@to.trf1.gov.br";
			break;
		case "TOJE":
		case "43JE":
			$NomSec="Juizado Especial Federal de Tocantins";
			$NomJus="Justiça Federal do Estado Federal de Tocantins";
			$telSec="(63) 218-3816(1ªv), 218-3826 (2ªv), 218-3884 (J.Esp.)";
			$EndSec="AANO 20, Conjunto 01, Lotes 3/4 - centro<br>CEP 77001-128, Palmas - TO";
			$SedSec="Palmas - TO";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.to.trf1.gov.br";
			$PorSec="101/04-DIREF";
			$TnsSec="JFTO";
			$CodSec="4300";
			$EmaSec="nucju@to.trf1.gov.br";
			break;
		case "TRF1":
		case "TRF":
		case "1000":
		case "100":
			$NomSec="Tribunal Regional Federal da 1ª Região";
			$NomJus="Tribunal Regional Federal da 1ª Região";
			$telSec="";
			$SedSec="Brasília - DF";
			$AteSec="das 9:00 &agrave;s 18:00 hs";
			$SitSec="www.trf1.jus.br";
			$PorSec="";
			$TnsSec="TRF1";
			$CodSec="1000";
			$EmaSec="nucju@trf1.gov.br";
			break;
		# NOVOS - 25/04/2006
		case "EUS":
		case "3310":
		   $NomSec=" Subseção Judiciária de Eunápolis";
		   $NomJus="Justiça Federal do Estado Seção Judiciária do Estado da Bahia";
		   $telSec="";
		   $EndSec="";
		   $SedSec="";
		   $AteSec="das 9:00 às 18:00 hs";
		   $SitSec="www.BA.trf1.gov.br";
		   $PorSec="";
		   $CodSec="3310";
		   $TnsSec="EUS";
		   $EmaSec="01vara.EUS@trf1.gov.br";
		   break;

		case "ITB":
		case "3311":
		   $NomSec=" Subseção Judiciária de Itabuna";
		   $NomJus="Justiça Federal do Estado Seção Judiciária do Estado da Bahia";
		   $telSec="";
		   $EndSec="";
		   $SedSec="";
		   $AteSec="das 9:00 às 18:00 hs";
		   $SitSec="www.BA.trf1.gov.br";
		   $PorSec="";
		   $CodSec="3311";
		   $TnsSec="ITB";
		   $EmaSec="01vara.ITB@trf1.gov.br";
		   break;

		case "RVD":
		case "3503":
		   $NomSec=" Subseção Judiciária de Rio Verde";
		   $NomJus="Justiça Federal do Estado Seção Judiciária do Estado de Goiás";
		   $telSec="";
		   $EndSec="";
		   $SedSec="";
		   $AteSec="das 9:00 às 18:00 hs";
		   $SitSec="www.GO.trf1.gov.br";
		   $PorSec="";
		   $CodSec="3503";
		   $TnsSec="RVD";
		   $EmaSec="01vara.RVD@trf1.gov.br";
		   break;

		case "ACG":
		case "3504":
		   $NomSec=" Subseção Judiciária de Aparecida de Goiânia";
		   $NomJus="Justiça Federal do Estado Seção Judiciária do Estado de Goiás";
		   $telSec="";
		   $EndSec="";
		   $SedSec="";
		   $AteSec="das 9:00 às 18:00 hs";
		   $SitSec="www.GO.trf1.gov.br";
		   $PorSec="";
		   $CodSec="3504";
		   $TnsSec="ACG";
		   $EmaSec="01vara.ACG@trf1.gov.br";
		   break;

		case "SNO":
		case "3603":
		   $NomSec=" Subseção Judiciária de Sinop";
		   $NomJus="Justiça Federal do Estado Seção Judiciária do Estado de Mato Grosso";
		   $telSec="";
		   $EndSec="";
		   $SedSec="";
		   $AteSec="das 9:00 às 18:00 hs";
		   $SitSec="www.MT.trf1.gov.br";
		   $PorSec="";
		   $CodSec="3603";
		   $TnsSec="SNO";
		   $EmaSec="01vara.SNO@trf1.gov.br";
		   break;

		case "SOE":
		case "3815":
		   $NomSec=" Subseção Judiciária de São João Del Rei";
		   $NomJus="Justiça Federal do Estado Seção Judiciária do Estado de Minas Gerais";
		   $telSec="";
		   $EndSec="";
		   $SedSec="";
		   $AteSec="das 9:00 às 18:00 hs";
		   $SitSec="www.MG.trf1.gov.br";
		   $PorSec="";
		   $CodSec="3815";
		   $TnsSec="SOE";
		   $EmaSec="01vara.SOE@trf1.gov.br";
		   break;
		default:
		   $NomSec="";
		   $NomJus="";
		   $telSec="";
		   $EndSec="";
		   $SedSec="";
		   $AteSec="";
		   $SitSec="";
		   $PorSec="";
		   $CodSec="";
		   $TnsSec="";
		   $EmaSec="";
		   break;


	}
	//echo "<!--\n".$SecSig."\n-->";
	switch ($SecDad){
		case 'Sec':
			return ($NomSec);
			break;
		case 'Com':
			if (substr($NomSec,0,3)=='Sub')
				return ("&nbsp;&nbsp;&nbsp;.$NomSec");
			else
				return ($NomSec);
			break;
		case 'Jus':
			return ($NomJus);
			break;
		case 'Sed':
			return ($SedSec);
			break;
		case 'Por':
			return ($PorSec);
			break;
		case 'Sit':
			return ($SitSec);
			break;
		case 'Ema':
			return ($EmaSec);
			break;
		case 'Tel':
			return ($telSec);
			break;
		case 'End':
			return ($EndSec);
			break;
		case 'Ate':
			return ($AteSec);
			break;
		case 'Cod':
			return ($CodSec);
			break;
		case 'Tns':
			return ($TnsSec);
			break;
		default:
			return "";
			break;
			}
	return ($NomSec);
}
function RetornaSiglaSecao($Codigo)
{
	switch ($Codigo)
	{
		case "3200":
			$Sigla="AM";
			break;
		case "3201":
			$Sigla="TB";
			break;
		case "3000":
			$Sigla="AC";
			break;
		case "3100":
			$Sigla="AP";
			break;
		case "3300":
			$Sigla="BA";
			break;
		case "3301":
			$Sigla="IL";
			break;
		case "3302":
			$Sigla="CFS";
			break;
		case "3303":
			$Sigla="BES";
			break;
		case "3304":
			$Sigla="FSA";
			break;
		case "3305":
			$Sigla="JZR";
			break;
		case "3306":
			$Sigla="PAF";
			break;
		case "3307":
			$Sigla="VCA";
			break;
		case "3308":
			$Sigla="JEE";
			break;
		case "3309":
			$Sigla="GNB";
			break;
		case "3400":
			$Sigla="DF";
			break;
		case "3500":
			$Sigla="GO";
			break;
		case "3501":
			$Sigla="LZA";
			break;
		case "3502":
			$Sigla="ANS";
			break;
		case "3600":
			$Sigla="MT";
			break;
		case "3601":
			$Sigla="CCS";
			break;
		case "3602":
			$Sigla="ROI";
			break;
		case "3700":
		 	$Sigla="MA";
			break;
		case "3701":
			$Sigla="IM";
			break;
		case "3702":
			$Sigla="CXS";
			break;
		case "3800":
			$Sigla="MG";
			break;
		case "3801":
			$Sigla="JF";
			break;
		case "3802":
			$Sigla="UB";
			break;
		case "3803":
			$Sigla="UD";
			break;
		case "3804":
			$Sigla="PSS";
			break;
		case "3805":
			$Sigla="SSP";
			break;
		case "3806":
			$Sigla="PMS";
			break;
		case "3807":
			$Sigla="MCL";
			break;
		case "3808":
			$Sigla="LAV";
			break;
		case "3809":
			$Sigla="VGA";
			break;
		case "3810":
			$Sigla="PSA";
			break;
		case "3811":
			$Sigla="DVL";
			break;
		case "3812":
			$Sigla="SLA";
			break;
		case "3813":
			$Sigla="GVS";
			break;
		case "3814":
			$Sigla="IIG";
			break;
		case "3900":
			$Sigla="PA";
			break;
		case "3901":
			$Sigla="MB";
			break;
		case "3902":
			$Sigla="ST";
			break;
		case "3903":
			$Sigla="ATM";
			break;
		case "3904":
			$Sigla="CAH";
			break;
		case "4000":
			$Sigla="PI";
			break;
		case "4001":
			$Sigla="PCZ";
			break;
		case "4100":
			$Sigla="RO";
			break;
		case "4101":
			$Sigla="JIP";
			break;
		case "4200":
			$Sigla="RR";
			break;
		case "4300":
			$Sigla="TO";
			break;
		case "1000":
			$Sigla="TRF1";
			break;
		# NOVOS - 25/04/2006
		case "3310":
		   $Sigla="EUS";
		   break;

		case "3311":
		   $Sigla="ITB";
		   break;

		case "3503":
		   $Sigla="RVD";
		   break;

		case "3504":
		   $Sigla="ACG";
		   break;

		case "3603":
		   $Sigla="SNO";
		   break;

		case "3815":
		   $Sigla="SOE";
		   break;

		case "JFDSV":
		   $Sigla="DF";
		   break;
		   
		case "TRF1":
		case "0100":
		case "1000":
			$Sigla="TRF1";
			break;

		default:
			$Sigla="";
			break;

	}
		return($Sigla);
}
function MostrarMensagem($Msg){
	global $corlinha2;
	echo "
	<html>\r\n
	<head>\r\n
	<title>Tribunal Regional Federal da Primeira Região</title>\r\n
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">\r\n
	<TITLE>TRF 1ª Região - Certifica Autenticidade</TITLE>\r\n
	<link href=\"/Objetos/trf1_style.css\" rel=\"stylesheet\" type=\"text/css\">\r\n
	<script language=\"JavaScript1.2\" src=\"/Objetos/trf1_layout.js\"></script>\r\n
	<script language=\"JavaScript1.2\" src=\"/Objetos/trf1_barramenu.js\"></script>\r\n
	</head>
	<center><font class=\"titulo2\"><b>Tribunal Regional Federal da Primeira Região</b></font><br>
	<script>imprime_barra8();</script><br><TABLE align=center BORDER=1 width=100% CELLSPACING=0 CELLPADDING=0 >
	<tr><td valign=top bgcolor=$corlinha2 align=center ><br><br><font size=5>\n
	<strong>$Msg</strong><br>
	</td></tr></table><br><script>imprime_barra8();</script><br></html>\n";

}
function fim_pagina($navegP="",$navegV=0){
	global $IvIntranet;
	$mensagem="";
	$naveg="&nbsp;";
	if ($navegV==1)
		$naveg.="<a href=\"javascript:history.back(-1)\">"
			."<img src=\" /Layout/trf1_bar24inf_anterior.gif\" border=0 alt=\"Página anterior\">"
			."</a>&nbsp;";

	if (($navegP!="")&&($navegP!="ePetInicio")){
		$naveg.="<a href=\"$navegP\">"
			."<img src=\" /Layout/trf1_bar24inf_pesquisa.gif\" border=0 alt=\"Nova pesquisa\">"
			."</a>&nbsp;";
	}

	$mensagem="Emitido pelo site ".$_SERVER["SERVER_NAME"]." em ".date ("d/m/Y à\s H:i:s");

	return ("
	<TABLE BORDER=0 width=100% cellspacing=0 cellpadding=0>
	<tr height=24><td width=1 height=24 valign=top><img src=/Layout/trf1_bar24inf_inicio.gif></td>"

	.((($navegP=="ePetInicio")&&($IvIntranet)) ?
	"<td width=200 background=/Layout/trf1_bar24inf.gif align=left  ><font size=1>
	<a href=\"#\" onclick=\"autenticacao('PET_EPROC');\">
	<img src=\"/Layout/trf1_bar24inf_admin.gif\" alt=\"Consultar Petições\" width=\"24\" height=\"24\" border=0 ></a>
	</font></td><td width=993 background=/Layout/trf1_bar24inf.gif align=right><font size=1>&nbsp;</font></td>" : "")

	."<td background=/Layout/trf1_bar24inf.gif valign=top align=right>$naveg
	</td><td width=1 valign=top><img src=/Layout/trf1_bar24inf_fim.gif></td>
	</tr></table>\n

	<center><font size=1 face=verdana></b>$mensagem</BODY></HTML>");
}


function CPCabecalho($NomeSecao,$titulo,$navegP="",$navegV=0,$sistema="")
{
	global $IvIntranet;

	if ($NomeSecao!="TRF1")
		$titPag = "<font class=\"titulo1\"><b>\n$NomeSecao<br></font><font class=\"titulo2\"><b>$titulo</font>\n";
	else
		$titPag = "<font class=\"titulo1\"><b>\n$titulo</font>\n";


	$naveg="&nbsp;";
	if ($navegV==1)
		$naveg.="\n<a href=\"javascript:history.back(-1)\">\n"
			."<img src=\" /Layout/trf1_bar24sup_anterior.gif\" border=0 alt=\"Página anterior\">\n"
			."</a>&nbsp;\n";

	if ($navegP!="")
		$naveg.="\n<a href=\"$navegP\">\n"
			."<img src=\" /Layout/trf1_bar24sup_pesquisa.gif\" border=0 alt=\"Nova pesquisa\">\n"
			."</a>&nbsp;\n";


	$retorno = "<TITLE>".strip_tags($titulo)."</TITLE>\n
		<META NAME=\"AUTHOR\" CONTENT=\"Janderson Casado de Vasconcelos Santos\">\n
		<script language=\"JavaScript1.2\" src=\"/Objetos/trf1_layout.js\"></script>\n";

		$retorno .= "<script language=\"JavaScript1.2\" src=\"/Objetos/trf1_barramenu.js\"></script>\n";


	$retorno .= "<STYLE>\n
	<!--\n
	A		{ text-decoration: none; color: #000000 }\n
	A:hover	{ text-decoration: none; font-weight: none;  color: red }\n
	td {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px}\n
	//-->\n
	</style>\n
	<link href=\"/Objetos/trf1_style.css\" rel=\"stylesheet\" type=\"text/css\">\n
	</HEAD>\n

	<BODY>\n
	<center>

	$titPag\n
	<TABLE BORDER=0 width=100% cellspacing=0 cellpadding=0>\n
	<tr height=24>\n
	<td width=1 height=24 valign=top>\n
	<img src=/Layout/trf1_bar24sup_inicio.gif>\n
	</td>\n"

	.(($sistema=="ePetInicio")&&($IvIntranet) ?
	"<td width=200 background=/Layout/trf1_bar24sup.gif align=left  ><font size=1>
	<a href=\"#\" onclick=\"autenticacao('PET_EPROC');\">
	<img src=\"/Layout/trf1_bar24sup_admin.gif\" alt=\"Consulta\" width=\"24\" height=\"24\" border=0 ></a>
	</font></td><td width=993 background=/Layout/trf1_bar24sup.gif align=right><font size=1>&nbsp;</font></td>" : "")

	."<td background=/Layout/trf1_bar24sup.gif valign=top align=right>\n $naveg </td>\n
	<td width=1 valign=top>\n<img src=/Layout/trf1_bar24sup_fim.gif>\n</td>\n
	</tr>\n
	</table>\n
	</font></center>\n<font face=verdana size=2>\n";
	return $retorno;
}
function DiminuiDias($dias,$datahoje){
// Desmembra Data -------------------------------------------------------------
  if (ereg ("([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})", $datahoje, $sep)) {
  $dia = $sep[1];
  $mes = $sep[2];
  $ano = $sep[3];
  } else {
    echo "<b>Formato Inválido de Data - $datahoje</b><br>";
  }

// Meses que o antecessor tem 31 dias -----------------------------------------
  if($mes == "01" || $mes == "02" || $mes == "04" || $mes == "06" || $mes == "08" || $mes == "09" || $mes == "11"){
    for ($cont = $dias ; $cont > 0 ; $cont--){
    $dia--;
      if($dia == 00){ // Volta o dia para dia 31 .
      $dia = 31;
      $mes = $mes -1; // Diminui um mês se o dia zerou .
        if($mes == 00){
        $mes = 12;
        $ano = $ano - 1; // Se for Janeiro e subtrair 1 , vai para o ano anterior no mês de dezembro.
        }
      }
    }
  }
// Meses que o antecessor tem 30 dias -----------------------------------------
  if($mes == "05" || $mes == "07" || $mes == "10" || $mes == "12" ){
    for ($cont = $dias ; $cont > 0 ; $cont--){
    $dia--;
      if($dia == 00){ // Volta o dia para dia 30 .
      $dia = 30;
      $mes = $mes -1; // Diminui um mês se o dia zerou .
      }
    }
  }
// Mês que o antecessor é fevereiro -------------------------------------------
  if($ano % 4 == 0 && $ano%100 != 0){ // se for bissexto
    if($mes == "03" ){
      for ($cont = $dias ; $cont > 0 ; $cont--){
      $dia--;
        if($dia == 00){ // Volta o dia para dia 30 .
        $dia = 29;
        $mes = $mes -1; // Diminui um mês se o dia zerou .
        }
      }
    }
  }//fecha se bissexto...
  else{ // se não for bissexto
    if($mes == "03" ){
      for ($cont = $dias ; $cont > 0 ; $cont--){

        $dia--;
        if($dia == 00){ // Volta o dia para dia 30 .
          $dia = 28;
          $mes = $mes -1; // Diminui um mês se o dia zerou .
        }
      }
    }
  }
// Confirma Saída de 2 dígitos ------------------------------------------------
  if(strlen($dia) == 1){$dia = "0".$dia;}
  if(strlen($mes) == 1){$mes = "0".$mes;}

// Monta Saída ----------------------------------------------------------------
  $nova_data = $dia."/".$mes."/".$ano ;
  return $nova_data;
}
function AumentaDias($dias,$datahoje){
// Desmembra Data -------------------------------------------------------------
  if (ereg ("([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})", $datahoje, $sep)) {
  $dia = $sep[1];
  $mes = $sep[2];
  $ano = $sep[3];
  } else {
    echo "<b>Formato Inválido de Data - $datahoje</b><br>";
  }
  $i = $dias;
  for($i = 0;$i<$dias;$i++){
    if ($mes == 01 || $mes == 03 || $mes == 05 || $mes == 07 || $mes == 8 || $mes == 10 || $mes == 12){
      if($mes == 12 && $dia == 31){
        $mes = 01;
        $ano++;
        $dia = 00;
      }
    if($dia == 31 && $mes != 12){
      $mes++;
      $dia = 00;
    }
  }//fecha if geral
  if($mes == 04 || $mes == 06 || $mes == 09 || $mes == 11){
    if($dia == 30){
      $dia =  00;
      $mes++;
    }
  }//fecha if geral
  if($mes == 02){
    if($ano % 4 == 0 && $ano % 100 != 0){ //ano bissexto
      if($dia == 29){
        $dia = 00;
        $mes++;
      }
    }
    else{
      if($dia == 28){
        $dia = 00;
        $mes++;
      }
    }
  }//FECHA IF DO MÊS 2
  $dia++;
  }//fecha o for()

// Confirma Saída de 2 dígitos ------------------------------------------------
  if(strlen($dia) == 1){$dia = "0".$dia;};
  if(strlen($mes) == 1){$mes = "0".$mes;};

// Monta Saída ----------------------------------------------------------------
$nova_data = $dia."/".$mes."/".$ano;
return $nova_data;

}//fecha a funçâo data
#Função que retorna por extenso no  nome do mes
function Nome_Mes($mes)
{
	switch($mes)
	   {
		case 1 : $mes = "Janeiro";
			break;
		case 2 : $mes = "Fevereiro";
			break;
		case 3 : $mes = "Março";
			break;
		case 4 : $mes = "Abril";
			break;
		case 5 : $mes = "Maio";
			break;
		case 6 : $mes = "Junho";
			break;
		case 7 : $mes = "Julho";
			break;
		case 8 : $mes = "Agosto";
			break;
		case 9 : $mes = "Setembro";
			break;
		case 10 : $mes = "Outubro";
			break;
		case 11 : $mes = "Novembro";
			break;
		case 12 : $mes = "Dezembro";
			break;
		}
		return $mes;
}
function DataEstensoPhp($DataEn){
	// YYYY-MM-DD HH24:MI:SS
	setlocale(LC_ALL, 'portuguese', 'pt_BR', 'pt_br', 'ptb_BRA');
	$data = date($DataEn);//,'01/06/2008');
	return strftime("%A, %d de %B de %Y, às %H:%M", strtotime($data));
}
function formataProc($processo="0000000000"){
	if (strlen($processo)==10)
		$processo=substr($processo,0,2).'.'.substr($processo,2,2).'.'.substr($processo,4,5).'-'.substr($processo,9);
	else if (strlen($processo)==15)
		$processo=substr($processo,0,4).'.'.substr($processo,4,2).'.'.substr($processo,6,2).'.'.substr($processo,8,6).'-'.substr($processo,14);
	else{
		if (strlen($processo)>15){
			//0036535-45.2000.4.01.3400 -- 00365354520004013400
			//0019961-37.2002.4.01.3800 -- 00199613720024013800
			$processo = ComplCaracter($processo,"0",20);
			$processo = substr($processo,0,7). "-". substr($processo,7,2). ".". substr($processo,9,4). ".". substr($processo,13,1). ".". substr($processo,14,2). ".". substr($processo,16,4);
		}		
		elseif(strlen($processo)<10){
			$processo = ComplCaracter($processo,"0",10);
			$processo=substr($processo,0,2).'.'.substr($processo,2,2).'.'.substr($processo,4,5).'-'.substr($processo,9);
		}
		else{
			$processo = ComplCaracter($processo,"0",15);
			$processo=substr($processo,0,4).'.'.substr($processo,4,2).'.'.substr($processo,6,2).'.'.substr($processo,8,6).'-'.substr($processo,14);
		}
	}
	return $processo;
}
function VerificaNumProcesso($NumProcesso="", $CodSecao="") {
	$FlagResulFinal = false;
	$NumProcesso = str_replace(".","",$NumProcesso);
	$NumProcesso = str_replace("-","",$NumProcesso);
	$NumProcesso = str_replace("_","",$NumProcesso);
	$NumProcesso = trim($NumProcesso);
	$v_numproc 	= $NumProcesso;
	$v_soma 	= 0;
	$v_cont 	= 1;
	$ArraTeste1 = array('19', '20');
	if((strlen($v_numproc) == 16)&&(substr($v_numproc, 0, 1) == '0')) {
	  	$v_numproc = substr($v_numproc, 1, 15);
	}
	if((in_array(substr($v_numproc, 0, 2),$ArraTeste1)) ||((trim(substr($v_numproc, 0, 2))*1) > 96)) {
		if((strlen($v_numproc) <= 10) && (substr($v_numproc, 0, 6) == '200000')) {
			$TmpCompleta = substr($v_numproc, 2, strlen($v_numproc) - 2);
			$Tmpv_numproc=ComplCaracter($TmpCompleta,"0",8,"0");
			$v_numproc = substr($v_numproc, 0, 2).$Tmpv_numproc;
		}
		elseif((strlen($v_numproc) < 15)&&(!((strlen($v_numproc) < 11)&&(substr($v_numproc, 0, 6) == '200000')))) {
			if((@trim(@substr($v_numproc, 0, 2)))*1 > 96){
				$v_numproc = '19' . $v_numproc;

			}
			if(in_array(substr($v_numproc, 0, 2),$ArraTeste1)){
				if(substr($v_numproc, 4, 4) != $CodSecao){
					$v_numproc = substr($v_numproc, 0, 4).$CodSecao. substr($v_numproc, 4, strlen($v_numproc) - 4);
				}
			}
			$Tm1 = substr($v_numproc, 8, strlen($v_numproc)-8);
			$Tmpv_numproc = ComplCaracter($Tm1,"0",7,"0");
			$Tmpv_numproc = substr($Tmpv_numproc,0,7);
			$v_numproc = substr($v_numproc, 0, 8). $Tmpv_numproc;
		}
	}
	if(strlen($v_numproc) < 11){
		$Tm1 = ComplCaracter(substr($v_numproc, 2, strlen($v_numproc) - 2),"0",8,"0");
		$Tm1 = substr($Tm1,0,8);
		$v_numproc = substr($v_numproc, 0, 2) . $Tm1;
	}
	# Cálculo para o DV de processos a partir de 2002
	if((strlen($v_numproc) == 15)&&(((substr($v_numproc,0,4))*1) > 2001)){
		while($v_cont < 11){
			$v_soma = $v_soma + ($v_cont*((substr($v_numproc, $v_cont-1, 1))*1));
			$v_cont++;
		}
		while($v_cont < 15){
			$v_soma = $v_soma+(($v_cont-10)*((substr($v_numproc, $v_cont-1, 1))*1));
			$v_cont++;
		}
	}
	else{
		# Cálculo do DV para todos os outros anos
		while($v_cont != (strlen($v_numproc))){
			$v_soma = $v_soma+($v_cont*((substr($v_numproc, $v_cont-1, 1))*1));
			$v_cont++;
		}
	}
	$v_soma = $v_soma % 11;
	if( $v_soma == 10) {
		$v_soma = 0;
	}
	if(($v_soma."") != substr($v_numproc, strlen($v_numproc)-1, 1)) {
		//echo "aqui $v_soma";exit;
		if(substr($v_numproc, strlen($v_numproc), 1) == 'X'){
			$v_numproc = substr($v_numproc, 1, strlen($v_numproc)-1).TO_CHAR($v_soma);
			$FlagResulFinal=true;
		}
		else{
			$FlagResulFinal=false;
		}
	}
	else
		$FlagResulFinal=true;
	# $NumProcesso = $v_numproc;
	# Se o ano for > que o ano atual tem que validar o processo com 15 e 10 numeros
	if(strlen($v_numproc) == 15) {
		$AnoProc = substr($v_numproc, 0, 4);
		if(($AnoProc*1) > date('Y')){
			#echo 'Ano do processo incorreto!!<br>';
			$FlagResulFinal=false;
		}
	}
	/*if(!$FlagResulFinal)
		echo 'Nº do Processo Inválido !!!';
	else
		echo 'Nº do Processo Válido !!! ';*/
	return $FlagResulFinal;
}
function CriaDiretorio($target){
  if(file_exists($target) || is_dir($target))
   return false;
  if(substr($target, 0, 1) != '/')
   $target = "/$target";

  if(eregi('\.\.', $target) || eregi("[^a-zA-Z0-9\._\-\/]", $target))
   return false;
  if(mkdir($target)){
   return true;
  }
  if(CriaDiretorio(substr($target, 0, (strrpos($target, '/')))) == true){
   if(CriaDiretorio($target) == true)
     return true;
   else
     return false;
  }
  else{
   return false;
  }
}
function dir_vazio($dir)
{
    if (($files = @scaneia_Dir($dir)) && count($files) <= 2) {
        return true;
    }
    return false;
}
function scaneia_Dir($dir) 
{
	define('SO',strtoupper(substr(PHP_OS, 0, 3)));
	define('DS',DIRECTORY_SEPARATOR);

    $arrfiles = array();
    if (is_dir($dir)) {
        if ($handle = opendir($dir)) {
            chdir($dir);
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != "..") {
                    if (is_dir($file)) {
                        $arr = scaneia_Dir($file);
                        foreach ($arr as $value) {
                            $arrfiles[] = $dir.DS.$value;
                        }
                    } else {
                        $arrfiles[] = $dir.DS.$file;
                    }
                }
            }
            chdir("..".DS);
        }
        closedir($handle);
    }
	//var_dump($arrfiles);
    return $arrfiles;
}

function ListaArkiDiretorio ($startdir="./", $searchSubdirs=1, $directoriesonly=0,$NivelNomeWeb=0,$AddNome="",$ExtensoesPermitidas="htm,html,pdf", $maxlevel="all", $level=1) 
{
	define('SO',strtoupper(substr(PHP_OS, 0, 3)));
	define('DS',DIRECTORY_SEPARATOR);

	//list the directory/file names that you want to ignore
	$ignoredDirectory[] = ".";
	$ignoredDirectory[] = "..";
	$ignoredDirectory[] = "_vti_cnf";
	//$directorylist = "";
	global $directorylist;
	if (is_dir($startdir)) {
		if ($dh = opendir($startdir)) {
			while (($file = readdir($dh)) !== false) {
				if($file == ".." || $file == ".")continue; // Desconsidera os diretorios$searchSubdirs=1
				if (!(array_search($file,$ignoredDirectory) > -1)) {
				 if (filetype($startdir . $file) == "dir") {
				 	   if ((is_dir($file))&&($file=="Arquivos")) continue;
				 	   if ($searchSubdirs==0) continue;
					   //build your directory array however you choose;
					   //add other file details that you want.
					   $directorylist[$startdir . $file]['level'] 	= $level;
					   $directorylist[$startdir . $file]['dir'] 	= 1;
					   $directorylist[$startdir . $file]['name'] 	= $file;
					   $directorylist[$startdir . $file]['path'] 	= $startdir;
					   $directorylist[$startdir . $file]['pathWeb'] = "";
					   $directorylist[$startdir . $file]['type'] 	= 0; # 0 = Diretório ; 1 = Arquivo
					   if ($searchSubdirs==1) {
						   if ((($maxlevel) == "all") or ($maxlevel > $level)) {
							   $teste = ListaArkiDiretorio($startdir . $file . DS, $searchSubdirs, $directoriesonly,$NivelNomeWeb,$AddNome,$ExtensoesPermitidas,$maxlevel,$level + 1);
						   }
					   }
				   } else {
					   if (!$directoriesonly) {
 					   	    //if (is_dir($file)) continue;
					   	    if($ExtensoesPermitidas!=""){
								# Verifica se a extensão é permitida
								$ArrayExtensoesPermitidas=explode(",",$ExtensoesPermitidas);
								$ExtensaoArqAtual = explode(".",$file);
								$ExtensaoArqAtual = $ExtensaoArqAtual[sizeof($ExtensaoArqAtual)-1];
								$ExtensaoArqAtual = strtolower($ExtensaoArqAtual);
								if(!(in_array($ExtensaoArqAtual,$ArrayExtensoesPermitidas))) continue;
							}
						   //if you want to include files; build your file array
						   //however you choose; add other file details that you want.
							$directorylist[$startdir . $file]['level'] = $level;
							$directorylist[$startdir . $file]['dir'] = 0;
							$directorylist[$startdir . $file]['name'] = $file;
							$directorylist[$startdir . $file]['path'] = $startdir;
							$PathWTxt = "";
							$PathW = explode(DS,$startdir);
							$Cont = 0;
							for($i=sizeof($PathW);(($i>0)&&($Cont<=$NivelNomeWeb));$i--){
								if(isset($PathW[$i]))
									$PathWTxt = $PathW[$i] .DS. $PathWTxt .DS;
								$Cont++;
							}
							if(trim($AddNome!="")) {
								$PathWTxt = $AddNome . $PathWTxt;
							}
							$PathWTxt = DS . $PathWTxt;
							$PathWTxt = str_replace("///","/",$PathWTxt);
							$PathWTxt = str_replace("//","/",$PathWTxt);
							$PathWTxt = str_replace("//","/",$PathWTxt);
							$directorylist[$startdir . $file]['pathWeb'] = $PathWTxt;
							$directorylist[$startdir . $file]['type'] = 1; # 0 = Diretório ; 1 = Arquivo
						}
					}
				}
			}
			closedir($dh);
		}
	}
	return($directorylist);
}
function ListaArquivosDiretorio($dir,$filtro="",$dirweb="",$nivel="",$ultimoarquivo=""){
	global $arquivoanterior,$arrposatual,$ultimoarquivo,$nivelpasta, $flaganterior;
	$flagatual		= 0;
	$diraberto = opendir($dir); // Abre o diretorio especificado
	chdir($dir); // Muda o diretorio atual p/ o especificado
	while($arquivoatual = readdir($diraberto)) { // Le o conteudo do arquivo
		if($arquivoatual == ".." || $arquivoatual == ".")continue; // Desconsidera os diretorios
		$arr_ext = explode(";",$filtro);
		foreach($arr_ext as $ext) {
			if((!(strpos(strtoupper($arquivoatual), ".GIF")))&&(!(strpos(strtoupper($arquivoatual), ".JPG"))))continue;
			$extpos = (strtolower(substr($arquivoatual,strlen($arquivoatual)-strlen($ext)))) == strtolower($ext);
			if ($extpos == strlen($arquivoatual) and is_file($arquivoatual)) {// Verifica se o arquivo é igual ao filtro
				$fileatual = $dirweb.$nivel."/".$arquivoatual;
				$fileatual = str_replace("fonts","",$fileatual);
				$fileatual = str_replace("//","/",$fileatual);
				$fileatual = str_replace("\\","/",$fileatual);
				echo "<li type=\"circle\"><a href=\"javascript:AbreTipoDocumento('" . $fileatual . "')\">" .$arquivoatual."</a><br>\n"; // Imprimi em forma de arvore
				$arquivoanterior = "arq";
			}
		}
		if (is_dir($arquivoatual)) {
			$chkdiretoriofont = false;
			$chkdiretoriofont = strpos(strtoupper($nivel.$arquivoatual), "FONT");
			$chkdiretorioold = false;
			$chkdiretorioold = strpos(strtoupper($nivel.$arquivoatual), "OLD");
			if(($chkdiretoriofont===false)&&($chkdiretorioold===false)){
				if($arquivoanterior == "arq"){
					echo "\n</ul></li>";
					$arrposatual = explode("/",$dirweb.$arquivoatual);
					$nivelpasta = sizeof($arrposatual);
					if($nivelpasta>=5){
						$flaganterior = 1;
					}
					if(($flaganterior==1)&&($nivelpasta<=4)){
						$flagatual = 1;
					}
					else
						$flagatual = 0;
				}
				if(($flaganterior == 1)&&($flagatual == 1)){
					echo "</ul></li>\n";
					$flaganterior	= 0;
					$flagatual		= 0;
				}
				$arquivoanterior = "dir";
				echo "<li><img src=\"fold.gif\" class=\"menuafold\"><a href=\"#".$arquivoatual."\" name=\"".$arquivoatual."\" class=\"menuafold\">\n"
				."&nbsp;&nbsp;".$nivel.$arquivoatual."</a>\n "//"- ". $nivelpasta . "-" . $flagatual . "-" . $flaganterior
				."\n&nbsp;&nbsp;<ul class=\"look2\" style=\"list-style-image:url(list.gif);display:none\">\n";// Imprimi em forma de arvore
				ListaArquivosDiretorio($arquivoatual,$filtro,$dirweb.$arquivoatual."/",$nivel."",$ultimoarquivo); // Executa a funcao novamente se subdiretorio
				/*if(trim($arquivoatual)=="04 - Hasteamento da Bandeira")
					echo "</ul></li>\n";*/
			}
		}
	}
	chdir(".."); // Volta um diretorio
	closedir($diraberto); // Fecha o diretorio atual
}
function RetornaTagCLob($Vr,$Indic="")
{
	$Retorn="";
	if(!(strpos($Vr,"<".$Indic,0)===false)){
	$Retorn = trim(substr($Vr,strpos($Vr,"<" . $Indic,0),strpos($Vr,"</" . $Indic,0)-strpos($Vr,"<" . $Indic,0)));
	}
	return $Retorn;
}
function GeraArquivoNoticias($Conex,$webcodigorgao){
	flush();
	$CaminhoArq = array(
		110200 => 'd:\\web\\setorial\\ascom\\noticias\\',
		620000 => 'd:\\web\\setorial\\secor\\noticias\\'
	);
	$CaminhoUrl = array(
		110200 => '/Setorial/Ascom/',
		620000 => '/Setorial/Secor/'
	);
	#  Consultas no Banco
	# Consulta Ultima Noticia
	$sql=" SELECT
			WEB_NOTICIA.WNT_TXT_NOTICIA ,
			WEB_NOTICIA.WNT_DATAHORAFORM ,
			WEB_NOTICIA.WNT_BIN_FOTO_NORMAL ,
			WEB_NOTICIA.WNT_NUM_NOTICIA ,
		rownum
		FROM  (SELECT WNT_NUM_NOTICIA,TO_CHAR(WNT_DT_INS,'DD/MM/YYYY HH24:MI') WNT_DATAHORAFORM,
		WNT_TXT_NOTICIA,WNT_BIN_FOTO_NORMAL
		FROM WEB_NOTICIA
		where
			WNT_DT_DEL IS NULL AND WNT_COD_ENTIDADE=0 AND
			WNT_COD_ORGAO_EMISSOR=$webcodigorgao ORDER BY WNT_DT_INS DESC )
		WEB_NOTICIA where ROWNUM <=  5  ";

	if($Conex){
		$stmt = OCIParse ($Conex, $sql);

		OCIExecute ($stmt);
		$nrows = OCIFetchStatement($stmt,$linha);
		$WNT_TXT_NOTICIA=$linha['WNT_TXT_NOTICIA'] ;
		$DataHora=$linha["WNT_DATAHORAFORM"];
		$Foto=$linha["WNT_BIN_FOTO_NORMAL"];
		$Cod=$linha["WNT_NUM_NOTICIA"]  ;

		if ( $nrows <5 )
			$notT=$nrows-1;
		else
			$notT=4;
	}
	else
	{
		$notT = -1;
	}
	$CorpoArquivo  = "";
	$CorpoArquivo .= "\r\n"
					."<html>\r\n"
					."<head>\r\n"
					."<title>Notícias</title>\r\n"
					."<META HTTP-EQUIV=\"Pragma\" CONTENT=\"no-cache\">\r\n"
					."<META HTTP-EQUIV=\"Expires\" CONTENT=\"-1\">\r\n"
					."<META Http-Equiv=\"Cache-Control\" Content=\"no-cache\">\r\n"
					."<link href=\"../../../Objetos/trf1_style.css\" rel=\"stylesheet\" type=\"text/css\">\r\n"
					."<style>\r\n"
					."body {\r\n"
					."background-image: none;\r\n"
					."background-repeat: repeat;\r\n"
					."background-attachment: fixed;\r\n"
					."}\r\n"
					."</style>\r\n"
					."<!-- noticias -->\r\n"
					."<script language=\"JavaScript\">\r\n"
					."var velocidade=1;\r\n"
					."var reInicio=velocidade;\r\n"
					."var MsgTamArray=new Array();\r\n"
					."var GrupoManchetes='';\r\n"
					."var TempoPausa=4000;\r\n"
					."var PosFinal=0; \r\n"
					."var PosRef=0; \r\n"
					."var Atual=0;\r\n"
					."Manchetes=new Array();\r\n"
					."// inclusão dos itens de visualização. aceita tags em HTML\r\n"
					."//*********inicio********\r\n";
	$Manchete="";
	for ($not=0;$not<=$notT;$not++){
		$Manchete=str_replace('\"','"',RetornaTagCLob($WNT_TXT_NOTICIA[$not],"manchete"));
		$Manchete=str_replace('¿','',$Manchete);
		$Manchete=str_replace('"','\"',$Manchete);
		$Hora=$DataHora[$not];
		$Codigo=$Cod[$not];
		$CorpoArquivo .= "//*********$not********\r\n";
		$CorpoArquivo .= "\r\nManchetes[$not]='<div id=not$not align=\"left\"><a target=_parent href=\'/Consulta/Noticias/AbreNoticia.php?id=$Codigo&cont=&email=\'><font face=\"Verdana, Arial, sans-serif\" size=\"2\">$Hora - ".str_replace('\"','"',$Manchete)."</font></a></div><br><br>';";
		//$CorpoArquivo .= "Manchetes[$not] = myScroller1.addItem(\"<a target=_parent href='/Consulta/Noticias/"
		//	."AbreNoticia.php?id=$Codigo&cont=&email='><span class='noticia'>$Hora - $Manchete</a>\")\r\n";
	}

		$CorpoArquivo .= "\r\n"
						. "\r\n
						for(contMsg=0;contMsg<Manchetes.length;contMsg++)GrupoManchetes=GrupoManchetes+Manchetes[contMsg];\r\n
						GrupoManchetes=GrupoManchetes+Manchetes[0];\r\n
						\r\n
						function ApresentaNoticias(){\r\n
							var largura=275;\r\n
							var altura=50;\r\n
							var corfund=\"#ffffff\";\r\n
							if(document.getElementById || document.all){\r\n
								document.write('<div style=\"position:relative;overflow:hidden;width:'+largura+';height:'+altura+';clip:rect(0 '+largura+' '+altura+' 0);\" onMouseover=\"velocidade=0;this.className=\'tanlight\';\" onMouseout=\"velocidade=reInicio;this.className=\'tan\';\">');\r\n
								document.write('<div id=\"MenuPrincipal\" style=\"position:relative;width:'+largura+';\"></div></div>');\r\n
								document.write('<div id=\"divoculta\" style=\"position:absolute;visibility:hidden;width:'+largura+';\"></div>');\r\n
							}\r\n

							for(contMsg=0;contMsg<Manchetes.length;contMsg++){\r\n
								if(document.all) {\r\n
									divoculta.innerHTML=Manchetes[contMsg];\r\n
									MsgTamArray[contMsg]=divoculta.offsetHeight;\r\n
									if((contMsg + 1)>=(Manchetes.length)){\r\n
										divExplorer=eval('MenuPrincipal');\r\n
										divExplorer.style.pixelTop=0;\r\n
										divExplorer.innerHTML=GrupoManchetes;\r\n
										PosicaoSuperior=divExplorer.offsetHeight;\r\n
										setTimeout(\"RolaMensagens()\",TempoPausa);\r\n
									}\r\n
								}\r\n
								else if(document.getElementById){\r\n
									document.getElementById('divoculta').innerHTML=Manchetes[contMsg];\r\n
									MsgTamArray[contMsg]=document.getElementById('divoculta').offsetHeight\r\n;
									if((contMsg + 1)>=(Manchetes.length)){\r\n
										DivMsgAt = document.getElementById('MenuPrincipal');\r\n
										divMozilla=eval(DivMsgAt);\r\n
										divMozilla.style.top=0;\r\n
										divMozilla.innerHTML=GrupoManchetes;\r\n
										setTimeout(\"RolaMensagens()\",TempoPausa);\r\n
									}\r\n
								}\r\n
								else{\r\n
									alert('Por favor atualize seu navegador para visualizar as notícias corretamente !');\r\n
									break;\r\n
								}\r\n
							}\r\n
						}\r\n
						function RolaMensagens(){\r\n
							if(PosRef >= MsgTamArray[Atual]){\r\n
								PosRef=0;Atual++;\r\n
								setTimeout(\"RolaMensagens()\",TempoPausa);\r\n
								return;\r\n
							}\r\n
							else if(Atual<Manchetes.length){\r\n
								if(velocidade>0){\r\n
									PosFinal=(MsgTamArray[Atual]-PosRef)%velocidade;\r\n
									if(PosFinal==0){\r\n
										if(document.all) {\r\n
											divExplorer.style.pixelTop-=velocidade;PosRef+=velocidade;\r\n
										}\r\n
										else{\r\n
											divMozilla.style.top=parseInt(divMozilla.style.top)-velocidade;PosRef+=velocidade;\r\n
										}\r\n
									}\r\n
									else {\r\n
										if(document.all){\r\n
											divExplorer.style.pixelTop-=PosFinal;PosRef+=PosFinal;PosFinal=0;\r\n
										}\r\n
										else{\r\n
											divMozilla.style.top=parseInt(divMozilla.style.top)-PosFinal;PosRef+=PosFinal;PosFinal=0;\r\n
										}\r\n
									}\r\n
								}\r\n
								setTimeout(\"RolaMensagens()\",20);\r\n
							}\r\n
							else if(Atual==Manchetes.length){\r\n
								Atual=0;PosRef=0;\r\n
								if(document.all){\r\n
									divExplorer.style.pixelTop=0; \r\n
								}\r\n
								else{\r\n
									divMozilla.style.top=0;	\r\n
								}\r\n
								setTimeout(\"RolaMensagens()\",1000);\r\n
							}\r\n
						}\r\n";
	$CorpoArquivo .= "</script>\r\n"
					. "</head>\r\n"
					. "<body >\r\n"
					. "<!-- QUADRO DE NOTÍCIAS -->\r\n"
					. "<script language=\"JavaScript\">\r\n"
					. "ApresentaNoticias();\r\n"
					. "</script>\r\n"
					. "</body>\r\n"
					. "</html>";
		//echo $CorpoArquivo;
		$CaminhoArquivo 	=	$CaminhoArq[$webcodigorgao];//"d:\\web\\setorial\\ascom\\noticias\\";
		$nome = "trf1noticias.htm";
		$filename = $CaminhoArquivo . $nome;
		if(file_exists($filename)){
			@unlink($filename);
		}
		$fp = fopen($filename,"a+");
		fwrite($fp, " \r\n");
		fwrite($fp, $CorpoArquivo . " \r\n");
		fwrite($fp, " \r\n");
		fclose($fp);
}
function GeraArquivoNoticiasNovoSite($Conex,$webcodigorgao){
	flush();
	$CaminhoArq = array(
		110200 => 'd:\\web\\setorial\\ascom\\noticias\\',
		620000 => 'd:\\web\\setorial\\secor\\noticias\\'
	);
	$CaminhoUrl = array(
		110200 => '/Setorial/Ascom/',
		620000 => '/Setorial/Secor/'
	);
	#  Consultas no Banco
	# Consulta Ultima Noticia
	$sql=" SELECT
			WEB_NOTICIA.WNT_TXT_NOTICIA ,
			WEB_NOTICIA.WNT_DATAHORAFORM ,
			WEB_NOTICIA.WNT_BIN_FOTO_NORMAL ,
			WEB_NOTICIA.WNT_NUM_NOTICIA ,
		rownum
		FROM  (
			SELECT WNT_NUM_NOTICIA,TO_CHAR(WNT_DT_INS,'DD/MM/YYYY HH24:MI') WNT_DATAHORAFORM,
			WNT_TXT_NOTICIA,WNT_BIN_FOTO_NORMAL
			FROM WEB_NOTICIA
			where
				WNT_COD_MATR_DEL IS NULL AND
				WNT_COD_ENTIDADE = 0 AND
				WNT_COD_ORGAO_EMISSOR = :OrgaoWeb
			ORDER BY WNT_DT_INS DESC
		)
		WEB_NOTICIA where ROWNUM <=  5  ";

	if($Conex){
		$stmt = OCIParse ($Conex, $sql);
		OCIBindByName($stmt,":OrgaoWeb", &$webcodigorgao, strlen($webcodigorgao) + 1,1);

		OCIExecute ($stmt);
		$nrows = OCIFetchStatement($stmt,$linha);
		$WNT_TXT_NOTICIA	= $linha['WNT_TXT_NOTICIA'] ;
		$DataHora			= $linha["WNT_DATAHORAFORM"];
		$Foto				= $linha["WNT_BIN_FOTO_NORMAL"];
		$Cod				= $linha["WNT_NUM_NOTICIA"]  ;

		if ( $nrows <5 )
			$notT=$nrows-1;
		else
			$notT=4;
	}
	else
	{
		$notT = -1;
	}
	$CorpoArquivo  = "";
	$CorpoArquivo .= "\r\n"
					."<html>\r\n"
					."<head>\r\n"
					."<title>Notícias</title>\r\n"
					."<META HTTP-EQUIV=\"Pragma\" CONTENT=\"no-cache\">\r\n"
					."<META HTTP-EQUIV=\"Expires\" CONTENT=\"-1\">\r\n"
					."<META Http-Equiv=\"Cache-Control\" Content=\"no-cache\">\r\n"
					."<link href=\"../../../Objetos/trf1_style.css\" rel=\"stylesheet\" type=\"text/css\">\r\n"
					."<style>\r\n"
					."body {\r\n"
					."background-image: none;\r\n"
					."background-repeat: repeat;\r\n"
					."background-attachment: fixed;\r\n"
					."}\r\n"
					."</style>\r\n"
					."<!--//*********inicio********\r\n-->\n"
					."<!-- noticias -->\n"
					."<tr height=\"1px\">\n"
					."<td valign=top>\n"
					."<table width=100%>\n"
					."<!--Quadro de Notícias-->\n"
					."<tr><td align=\"center\">\n"
					."<table width=100%>\n";
	$Manchete="";
	for ($not=0;$not<=$notT;$not++){
		$Manchete=str_replace('\"','"',RetornaTagCLob($WNT_TXT_NOTICIA[$not],"manchete"));
		$Manchete=str_replace('¿','',$Manchete);
		$Manchete=str_replace('"','\"',$Manchete);
		$Manchete=str_replace('<manchete>','',$Manchete);
		$Hora=$DataHora[$not];
		$Codigo=$Cod[$not];
		$CorpoArquivo .= 	"<!--//*********$not********\r\n-->"
							. "<tr>\n"
							."<td valign=top><font class=pontinho>.:</font></td>\n"
							."<td valign=top class=nota>\n"
							."<a target=_parent title=\"$Manchete\" href='/Consulta/Noticias/AbreNoticia.php?id=$Codigo&cont=&email='>"
							."<font class=\"pontinho\">$Hora - ".str_replace('\"','"',$Manchete)."</font></a>\n"
							."</td>\n</tr>\n";
	}

	$CorpoArquivo .= "</table>\n"
					."</td></tr>\n"
					."</table>\n"
					."</td></tr>\n"
					."</body>\n"
					."</html>";
		//echo $CorpoArquivo;
		$CaminhoArquivo 	=	$CaminhoArq[$webcodigorgao];//"d:\\web\\setorial\\ascom\\noticias\\";
		$nome = "trf1noticias.htm";
		$filename = $CaminhoArquivo . $nome;
		if(file_exists($filename)){
			@unlink($filename);
		}
		$fp = fopen($filename,"a+");
		fwrite($fp, " \r\n");
		fwrite($fp, $CorpoArquivo . " \r\n");
		fwrite($fp, " \r\n");
		fclose($fp);
}
function GeraArquivoNoticiasAnteriorSemMozilla($Conex,$webcodigorgao){
	flush();
	$CaminhoArq = array(
		110200 => 'd:\\web\\setorial\\ascom\\noticias\\',
		620000 => 'd:\\web\\setorial\\secor\\noticias\\'
	);
	$CaminhoUrl = array(
		110200 => '/Setorial/Ascom/',
		620000 => '/Setorial/Secor/'
	);
	#  Consultas no Banco
	# Consulta Ultima Noticia
	$sql=" SELECT
			WEB_NOTICIA.WNT_TXT_NOTICIA ,
			WEB_NOTICIA.WNT_DATAHORAFORM ,
			WEB_NOTICIA.WNT_BIN_FOTO_NORMAL ,
			WEB_NOTICIA.WNT_NUM_NOTICIA ,
		rownum
		FROM  (SELECT WNT_NUM_NOTICIA,TO_CHAR(WNT_DT_INS,'DD/MM/YYYY HH24:MI') WNT_DATAHORAFORM,
		WNT_TXT_NOTICIA,WNT_BIN_FOTO_NORMAL
		FROM WEB_NOTICIA
		where
			WNT_DT_DEL IS NULL AND WNT_COD_ENTIDADE=0 AND
			WNT_COD_ORGAO_EMISSOR=$webcodigorgao ORDER BY WNT_DT_INS DESC )
		WEB_NOTICIA where ROWNUM <=  5  ";

	if($Conex){
		$stmt = OCIParse ($Conex, $sql);

		OCIExecute ($stmt);
		$nrows = OCIFetchStatement($stmt,$linha);
		$WNT_TXT_NOTICIA	= $linha['WNT_TXT_NOTICIA'] ;
		$DataHora			= $linha["WNT_DATAHORAFORM"];
		$Foto				= $linha["WNT_BIN_FOTO_NORMAL"];
		$Cod				= $linha["WNT_NUM_NOTICIA"]  ;

		if ( $nrows <5 )
			$notT=$nrows-1;
		else
			$notT=4;
	}
	else
	{
		$notT = -1;
	}
	$CorpoArquivo  = "";
	$CorpoArquivo .= "\r\n"
					."<html>\r\n"
					."<head>\r\n"
					."<title>Notícias</title>\r\n"
					."<META HTTP-EQUIV=\"Pragma\" CONTENT=\"no-cache\">"
					."<META HTTP-EQUIV=\"Expires\" CONTENT=\"-1\">"
					."<META Http-Equiv=\"Cache-Control\" Content=\"no-cache\">"
					."<link href=\"../../../Objetos/trf1_style.css\" rel=\"stylesheet\" type=\"text/css\">\r\n"
					."<style>\r\n"
					."body {\r\n"
					."background-image: none;\r\n"
					."background-repeat: repeat;\r\n"
					."background-attachment: fixed;\r\n"
					."}\r\n"
					."</style>\r\n"
					."<!-- noticias -->\r\n"
					."<script language=\"JavaScript\" src=\"../../../Objetos/scroll/dhtmllib.js\"></script>\r\n"
					."<script language=\"JavaScript\" src=\"../../../Objetos/scroll/scroller.js\"></script>\r\n"
					."<script language=\"JavaScript\">\r\n"
					."var myScroller1 = new Scroller(0, 0, 275, 90, 0, 0); // (x, y, width, height, border, padding)\r\n"
					."myScroller1.setColors(\"#000000\",\"#FFFFFF\",\"#FFFFFF\"); // cor das fontes/fundo/borda (nesta ordem)\r\n"
					."myScroller1.setFont(\"Arial\", 1); //(face, size) \r\n"
					."// inclusão dos itens de visualização. aceita tags em HTML\r\n"
					."//*********inicio********\r\n";
	$Manchete="";
	for ($not=0;$not<=$notT;$not++){
		$Manchete=str_replace('\"','"',RetornaTagCLob($WNT_TXT_NOTICIA[$not],"manchete"));
		$Manchete=str_replace('¿','',$Manchete);
		$Manchete=str_replace('"','\"',$Manchete);
		$Hora=$DataHora[$not];
		$Codigo=$Cod[$not];
		$CorpoArquivo .= "//*********$not********\r\n";
		$CorpoArquivo .= "myScroller1.addItem(\"<a target=_parent href='/Consulta/Noticias/"
			."AbreNoticia.php?id=$Codigo&cont=&email='><span class='noticia'>$Hora - $Manchete</a>\")\r\n";
	}
	if($Manchete=="")
		$CorpoArquivo .= "myScroller1.addItem(\"<a target=_parent class='noticia' href='/Consulta/Noticias/AbreNoticia.php?id=704&cont=&email='>27/09/2004 19:15 - <manchete>Espaço Cultural do TRF-1ª Região recebe o artista plástico Octávio de Freitas</a>\");";
	else
		$CorpoArquivo .= "//*********fim********\r\n"
					. " function runmikescroll(){\r\n"
					. "	var layer;\r\n"
					. "	var mikex, mikey;\r\n"
					. "	layer = getLayer(\"MenuPrincipal\");\r\n"
					. "	mikex = getPageLeft(layer);\r\n"
					. "	mikey = getPageTop(layer);\r\n"
					. "	myScroller1.setPause(2600);\r\n"
					. "	myScroller1.setSpeed(50);\r\n"
					. "	myScroller1.create();\r\n"
					. "	myScroller1.hide();\r\n"
					. "	myScroller1.moveTo(mikex, mikey);\r\n"
					. "	myScroller1.setzIndex(100);\r\n"
					. "	myScroller1.show();\r\n"
					. "}\r\n";
	if($Manchete!="")
		$CorpoArquivo .= "window.onload=runmikescroll;\r\n";
	$CorpoArquivo .= "</script>\r\n"
					. "</head>\r\n"
					. "<body >\r\n"
					. "<!-- QUADRO DE NOTÍCIAS -->\r\n"
					. "<div id=\"MenuPrincipal\" style=\"Z-INDEX: 6; POSITION: absolute; width: 350px; height:10px;\">\r\n"
					. "&nbsp;\r\n"
					. "</div>\r\n"
					. "</body>\r\n"
					. "</html>";
		//echo $CorpoArquivo;
		$CaminhoArquivo 	=	$CaminhoArq[$webcodigorgao];//"d:\\web\\setorial\\ascom\\noticias\\";
		$nome = "trf1noticias.htm";
		$filename = $CaminhoArquivo . $nome;
		if(file_exists($filename)){
			@unlink($filename);
		}
		$fp = fopen($filename,"a+");
		fwrite($fp, " \r\n");
		fwrite($fp, $CorpoArquivo . " \r\n");
		fwrite($fp, " \r\n");
		fclose($fp);
}
function GeraArquivoNoticiasFlash($Conex,$webcodigorgao){
	flush();
	$CaminhoArq = array(
		110200 => 'd:\\web\\setorial\\ascom\\noticias\\',
		620000 => 'd:\\web\\setorial\\secor\\noticias\\'
	);
	$CaminhoUrl = array(
		110200 => '/Setorial/Ascom/',
		620000 => '/Setorial/Secor/'
	);
	#  Consultas no Banco
	# Consulta Ultima Noticia
	$sql=" SELECT
			WEB_NOTICIA.WNT_TXT_NOTICIA ,
			WEB_NOTICIA.WNT_DATAHORAFORM ,
			WEB_NOTICIA.WNT_BIN_FOTO_NORMAL ,
			WEB_NOTICIA.WNT_NUM_NOTICIA ,
		rownum
		FROM  (SELECT WNT_NUM_NOTICIA,TO_CHAR(WNT_DT_INS,'DD/MM/YYYY HH24:MI') WNT_DATAHORAFORM,
		WNT_TXT_NOTICIA,WNT_BIN_FOTO_NORMAL
		FROM WEB_NOTICIA
		where
			WNT_DT_DEL IS NULL AND WNT_COD_ENTIDADE=0 AND
			WNT_COD_ORGAO_EMISSOR=$webcodigorgao ORDER BY WNT_DT_INS DESC )
		WEB_NOTICIA where ROWNUM <= 6  ";

	if($Conex){
		$stmt = OCIParse ($Conex, $sql);

		OCIExecute ($stmt);
		$nrows = OCIFetchStatement($stmt,$linha);
		$WNT_TXT_NOTICIA=$linha['WNT_TXT_NOTICIA'] ;
		$DataHora=$linha["WNT_DATAHORAFORM"];
		$Foto=$linha["WNT_BIN_FOTO_NORMAL"];
		$Cod=$linha["WNT_NUM_NOTICIA"]  ;
	}
	$CorpoArquivo  = "";

	$Manchete="";
	if($nrows>0){
		for ($ctnt=0;$ctnt<$nrows;$ctnt++){
			$Manchete=str_replace('\"','"',RetornaTagCLob($WNT_TXT_NOTICIA[$ctnt],"manchete"));
			$Manchete=str_replace('¿','',$Manchete);
			$Manchete=str_replace('"','\"',$Manchete);
			$Manchete=str_replace("<manchete>",'',$Manchete);
			$Hora		=	$DataHora[$ctnt];
			$Codigo		=	$Cod[$ctnt];
			$urlNot 	=	"/Consulta/Noticias/AbreNoticia.php?id=$Codigo&cont=&email=";
			//$CorpoArquivo .= "<a target=_parent href=''><span class='noticia'>$Hora - $Manchete</a>\")\r\n";
			$CorpoArquivo .= ""
			."&id".($ctnt+1)."=".($ctnt+1)."&\r\n"
			."&url".($ctnt+1)."=$urlNot&\r\n"
			."&fecha".($ctnt+1)."=$Hora&\r\n"
			."&noticia".($ctnt+1)."=$Manchete&\r\n\r\n"	;
		}
	}
	$CorpoArquivo .= "&id7=no&\r\n\r\n";
	$CorpoArquivo .= "\r\n&carga=1&\r\n";
	//echo $CorpoArquivo;
	$CaminhoArquivo 	=	$CaminhoArq[$webcodigorgao];//"d:\\web\\setorial\\ascom\\noticias\\";
	$nome = "trf1noticias.txt";
	$filename = $CaminhoArquivo . $nome;
	if(file_exists($filename)){
		@unlink($filename);
	}
	$fp = fopen($filename,"a+");
	fwrite($fp, $CorpoArquivo . " \r\n");
	fwrite($fp, " \r\n");
	fclose($fp);
}
function VerificaVariavel($Vlr,$VlrParam=""){
   if((isset($Vlr))&&(trim(@$Vlr)!="")){
	   if((isset($VlrParam))&&(trim(@$VlrParam)!="")){
			if($VlrParam==$Vlr){
				return true;
			}
			else{
				return false;
			}
		}
		else{
			return true;
		}
   }
   else{
		return false;
   }
}
global $gvOperPesq,$gvOperInter;
$gvOperPesq  = array("NÃO", "NAO", "E"  , "OU", "MESMO", "PERTO", "NOT", "AND", "OR", "PROX", "ADJ");
$gvOperInter = array("NOT", "NOT", "AND", "OR", "MESMO", "PERTO", "NOT", "AND", "OR", "PROX", "ADJ");

function MontarExpressaoIntermedia($txtPesquisa){
	global $gvOperPesq,$gvOperInter;
	global $lsCaracter,$liPar,$lsAnterior,$lsTermo,$gsExpressaoPar;
	global $liFlag;  # Indica a ocorrencia ou não de um espaço sem operador
					 # 1 indica que uma palavra foi inserida na string, espera-se
					 # a proxima seja um operador e não outra palavra. 0 indica que foi
					 # inserido um operador na string e 2 duas palavras seguida.
					 # No caso de 2 um operador AND é inserido automaticamente
	//echo "<!--\n\n (Montar:) ".$txtPesquisa."\n\n-->";
	$liInicio = 0;
	$giFim = 0;
	$liIndice1 = 0;
	$liFlag = 0;
	$liPar = 0;

	$txtPesquisa = strtoupper($txtPesquisa);
	$txtPesquisa = str_replace(";"			, "%"			,$txtPesquisa);
	$txtPesquisa = str_replace(" = "		, " "			,$txtPesquisa);
	$txtPesquisa = str_replace(" EQUIV "	, " "			,$txtPesquisa);
	$txtPesquisa = str_replace(" - "		, " "			,$txtPesquisa);
	$txtPesquisa = str_replace(" MINUS "	, " "			,$txtPesquisa);
	$txtPesquisa = str_replace(" OU "		, " OR "		,$txtPesquisa);
	$txtPesquisa = str_replace(" | "		, " OR "		,$txtPesquisa);
	$txtPesquisa = str_replace(" NÃO "		, " NOT "		,$txtPesquisa);
	$txtPesquisa = str_replace("~"			, ""			,$txtPesquisa);
	$txtPesquisa = str_replace("   "		, " "			,$txtPesquisa);
	$txtPesquisa = str_replace("  "			, " "			,$txtPesquisa);
	$txtPesquisa = str_replace( " )"		, ")"			,$txtPesquisa);
	$txtPesquisa = str_replace("( "			, "("			,$txtPesquisa);
	$txtPesquisa = str_replace("$"			, "%"			,$txtPesquisa);
	$txtPesquisa = str_replace(" PRÓX "		, " PROX "		,$txtPesquisa);
	$txtPesquisa = str_replace(" NEAR "		, " ADJ "		,$txtPesquisa);
	$txtPesquisa = str_replace(" ADJ "		, " [%%$$%%] "	,$txtPesquisa);
	$txtPesquisa = str_replace("ADJ"		, '$DJ'			,$txtPesquisa);
	$txtPesquisa = str_replace(" [%%$$%%] "	, " ADJ "		,$txtPesquisa);
	$txtPesquisa = str_replace(" PROX "		, " [%%$$%%] "	,$txtPesquisa);
	$txtPesquisa = str_replace("PROX"		, '$ROX'		,$txtPesquisa);
	$txtPesquisa = str_replace(" [%%$$%%] "	, " PROX "		,$txtPesquisa);

	if(strlen($txtPesquisa)!=""){
		$NewtxtPesquisa = "";
		$ArraytxtPesquisa = explode(" ",$txtPesquisa);
		for($icr=0;$icr<sizeof($ArraytxtPesquisa);$icr++){
			if((strlen($ArraytxtPesquisa[$icr])>3)||($ArraytxtPesquisa[$icr]=="NOT")||($ArraytxtPesquisa[$icr]=="OR")){
				$NewtxtPesquisa = @trim($NewtxtPesquisa) . " " . @trim($ArraytxtPesquisa[$icr]);
				//echo "<!--\n\n (TERMO $icr :) ".$ArraytxtPesquisa[$icr]."\n\n-->";
			}
			else{
				//echo "<!--\n\n (TERMO $icr :) [".$ArraytxtPesquisa[$icr]."]\n\n-->";
				if((strlen($ArraytxtPesquisa[$icr])==3)){
					if((!in_array($ArraytxtPesquisa[$icr],$gvOperPesq))&&(!in_array($ArraytxtPesquisa[$icr],$gvOperInter))){
						$NewtxtPesquisa = @trim($NewtxtPesquisa) . " " . @trim($ArraytxtPesquisa[$icr]) . "%";
					}
					/*else{
						echo "<!--\n\n (TERMO[in] $icr :) [".$ArraytxtPesquisa[$icr]."]\n\n-->";
					}					*/
				}
				/*else{
					echo "<!--\n\n (TERMO $icr :) [".$ArraytxtPesquisa[$icr]."]\n\n-->";
				}*/
			}

		}
		$txtPesquisa = trim($NewtxtPesquisa);
	}

	//echo "<!--\n\n (ALTERADO:) ".$txtPesquisa."\n\n-->";

	$CaracterFix 	= array(" - ","- "," -","-","ª","º","*","\'"  ,"/","\"","\/","\\",",",".");
	$CaracterText 	= array("-"  ,"-" ,"-" ,"%","$","$","%","''''","$","_" ,"_" ,"_" ,"%","_");
	$txtPesquisa = str_replace("   "," ",$txtPesquisa);
	$txtPesquisa = str_replace("  "," ",$txtPesquisa);
	$txtPesquisa = str_replace($CaracterFix, $CaracterText, $txtPesquisa);

	$gsPesquisa = trim($txtPesquisa);
	$txtPesquisa = $gsPesquisa;
	$gsExpressaoPar = array();
	$gsExpressaoPar[$liIndice1] = "";

	if (@$gsPesquisa != "") {
	   $giFim = strpos($gsPesquisa, ")",$liInicio);  # Procura a existencia de parenteses
	   if( $giFim === false){   #Não ocorrendo já trata a string
		 $gsPesquisa = Trata_Oper($gsPesquisa);

	   }
	   else{
		  $giFim = 0; $Control=0;
		  # Início while [1]
		  while ($giFim <= strlen($gsPesquisa) ){  # Com o parenteses de fim da expressão encontra o de inicio
		  	$Control++;if($Control>210)break;
			$giFim = strpos($gsPesquisa, ")",$liInicio);
			 if ($giFim === false) {
				$giFim = strlen($gsPesquisa) + 1;
			 }
			 else{
				$liPar = $giFim - 1;$Control2=0;
				# Início while [2]
				while ($liPar >= $liInicio){
				   $Control2++;if($Control2>200)break;

				   $lsCaracter = substr($gsPesquisa, $liPar, 1);
				   if ($lsCaracter == "("){ # Encontrado o caracter de inicio da string
					  # A expressão entre parenteses e retirada da pesquisa e substituido por uma tag
					  # que tem como padrão < indice >. Aonde "indice" e corespondede a posição no vetor
					  # $gsExpressaoPar
					  $gsExpressaoPar[$liIndice1] 	= substr($gsPesquisa, $liPar + 1, $giFim - $liPar - 1);
					  $gsPesquisa 					= str_replace("(" . $gsExpressaoPar[$liIndice1] . ")", "<" . $liIndice1 . ">",$gsPesquisa);
					  $liPar = $liInicio - 1;
					  $giFim = 0;
					  $liIndice1 = $liIndice1 + 1;
				   }
				   $liPar = $liPar - 1;
				}
				# Fim while [2]
			 }
			 $liInicio = $giFim + 1;
		  }
		  # Fim while
		  $liInicio = 0;$Control3=0;
		  # Início while [3]
		  while ($liInicio < sizeof($gsExpressaoPar)){
		   	$Control3++;if($Control3>210)break;
			 # As expressões tem seus operadores de pesquisa tratados pela sub Trata_Oper
			 $TmpGs = $gsExpressaoPar[$liInicio];
			 $gsExpressaoPar[$liInicio] = Trata_Oper($TmpGs);
			 $liInicio++;
		  }
		  # Fim while [3]
		  $gsPesquisa = Trata_Oper($gsPesquisa);
	   }
	   $liInicio = sizeof($gsExpressaoPar)-1; $Control4=0;
	   # Início while [4]
	   while ($liInicio >= 0){$Control4++;if($Control4>210)break;
		  # A Expressão é montada em sua versão Final
		  $gsPesquisa = str_replace("<" . $liInicio . ">", "(" . $gsExpressaoPar[$liInicio] . ")",$gsPesquisa);
		  $liInicio--;
	   }
	   # Fim while [4]
	   $gsPesquisa = str_replace("  ", " ",$gsPesquisa);
	   $lsTermo = substr($gsPesquisa, 0, 3);
	   if($lsTermo == "AND"){
		  $lsTermo = substr($gsPesquisa, 3, strlen($gsPesquisa) - 3);
		  $gsPesquisa = $lsTermo;
	   }
	   $liPar = 1;
	   $liInicio = 0;
	   $giFim = 0;$Control5=0;
	   # Início while [5]
	   while ( $giFim <= strlen($gsPesquisa) ){$Control5++;if($Control5>210)break;
	   # Verifica se a alternancia entre operadores está correta e
	   # corrige se necessário
		  $giFim = strpos($gsPesquisa, " ",$liInicio);
		  if ($giFim === false) $giFim = strlen($gsPesquisa) + 1;
		  $lsTermo = substr($gsPesquisa, $liInicio, $giFim - $liInicio);
		  $liFlag = strpos($lsTermo, "NEAR");
		  if(!($liFlag ===false)){
			 if(($lsAnterior == "NEAR") || ($lsAnterior == "EMEN")){
			 	$gsPesquisa = str_replace($lsTermo, "AND " . $lsTermo, $gsPesquisa);
				 $lsAnterior = "";
			 }
			 if( ($giFim == strlen($gsPesquisa) + 1) && (!($liFlag ===false)) && ($lsAnterior != "OR") && ($lsAnterior != "NOT") || ($liPar == 2) )
			 	$gsPesquisa = str_replace($lsTermo, "AND " . $lsTermo, $gsPesquisa);

			 $lsAnterior = "NEAR";
		  }
		  else{
			 $lsAnterior = $lsTermo;
		  }
		  $liInicio = $giFim + 1;
		  $liPar++;
	   }
	   # Fim while [5]
	   $lsTermo = substr($gsPesquisa, 0, 3);
	   if ($lsTermo == "AND") {
		  $lsTermo = substr($gsPesquisa, 4, strlen($gsPesquisa) - 4);
		  $gsPesquisa = $lsTermo;
	   }
	   //echo "<!--\n\n".$gsPesquisa."\n\n-->";

	   $gsPesquisa = str_replace("AND AND", "AND", $gsPesquisa);
	   $gsPesquisa = str_replace("(AND", "",$gsPesquisa);
	   $gsPesquisa = $gsPesquisa . " ";
	   $gsPesquisa = str_replace("AND % ", "",$gsPesquisa);
	   $gsPesquisa = str_replace("AND _ ", "",$gsPesquisa);
	   $gsPesquisa = str_replace("AND $ ", "",$gsPesquisa);
	   $gsPesquisa = " " . $gsPesquisa;
	   $gsPesquisa = str_replace(" % AND", "",$gsPesquisa);
   	   $gsPesquisa = str_replace(" _ AND", "",$gsPesquisa);
	   $gsPesquisa = str_replace(" $ AND", "",$gsPesquisa);
	   $gsPesquisa = str_replace(" AND WITHIN EMEN AND ", " AND ",$gsPesquisa);
	   $gsPesquisa = str_replace(" AND OR AND "," OR ",$gsPesquisa);
	   $gsPesquisa = str_replace(" AND NOT AND "," NOT ",$gsPesquisa);
	   $gsPesquisa = str_replace(") NEAR",") AND NEAR",$gsPesquisa);


	   $gsPesquisa = trim($gsPesquisa);
	}
	//echo "<!--\n\n".$gsPesquisa."\n\n-->";
    return $gsPesquisa;
}

function Trata_Oper($vPalavra){
	# Verifica cada uma das palavras em uma string e verifica se ela é ou não operador de pesquisa
	# visando o tratamento para atroca por seu respectivo no INTERMEDIA.
	global $liIndiceOper,$lsTermo;
	global $liFlag,$lsCaracter,$liAuxTag,$liAux,$gvOperPesq,$gvOperInter,$gsExpressaoPar;
	$lsPalavra = array();
	$lsCaracter = array();

	$liInicio = 0;
	$liFim = 0;
	$liIndice = 0;
	$liIndiceOper = 0;
	$liFlag = 1;
	$Control6=0;
	# Início while [1]
	while ($liFim <= strlen($vPalavra)){		//$Control6++;if($Control6>10)break;
	   $liFim = strpos($vPalavra, " ",$liInicio);
	   if ($liFim === false)
	   		$liFim = strlen($vPalavra)+1;
	   $lsTermo = substr($vPalavra, $liInicio, $liFim - $liInicio);
	   # Início while [2]

	   while ($liIndiceOper < sizeof($gvOperPesq) ){
	   	  //$Control7++;if($Control7>10)break;# Verifica se cada palavra é um operador de pesquisa
		  if ($lsTermo == $gvOperPesq[$liIndiceOper]){
			   $lsTermo = $gvOperInter[$liIndiceOper];
			   $liFlag = 0; # Caso afirmativo
		  }
		  $liIndiceOper ++;
	   }
	   # Fim while [2]

	   # Verifica-se com strpos a ocorrência do ADJ
	   $lsCaracter[0] = strpos($lsTermo, "ADJ");
	   if( (!($lsCaracter[0]===false)) && (strlen($lsTermo) > 3) ) $liFlag = 0;

 	   # Verifica-se com strpos a ocorrência do PROX
	   $lsCaracter[0] = strpos($lsTermo, "PROX");
	   if( (!($lsCaracter[0]===false)) && (strlen($lsTermo) > 4) ) $liFlag = 0;

 	   # Verifica-se com strpos a ocorrência do PERTO
	   $lsCaracter[0] = strpos($lsTermo, "PERTO");
	   if( (!($lsCaracter[0]===false)) && (strlen($lsTermo) > 5) ) $liFlag = 0;
	   $liIndiceOper = 0;

	   if( $liFlag < 2 ){
		  $lsPalavra[$liIndice] = $lsTermo;
		  $liFlag++;
	   }
	   else{
		  $lsPalavra[$liIndice] = "AND";
		  $lsPalavra[$liIndice + 1] = $lsTermo;
		  $liIndice++;
	   }
	   $liIndice++;
	   $liInicio = $liFim + 1;
	}
	# Fim while [1]
	$liIndiceOper = 0;
	$liIndice = 0;
	$lsTermo = "";
	$liFlag = 0;
	$Control8=0;
	# Início while [3]
	while ($liIndice < sizeof($lsPalavra) ){
		$Control8++;
		if($Control8>220)break;
	   if ($lsPalavra[$liIndice] == "MESMO") { # Tratamento para ocorrencia do Mesmo
		  $lsTermo = $lsTermo . "AND " . @$lsPalavra[$liIndice + 1] . " WITHIN EMEN ";
		  $liIndiceOper = $liIndice;
		  $liIndice++;
		  $liFlag = 1;
	   }
	   $liInicio = strpos(@$lsPalavra[$liIndice], "ADJ"); # Tratamento para ocorrencia do ADJ
	   if (!($liInicio === false)){
		  $liFlag = 1;
		  if( $liIndiceOper != ($liIndice - 1) ) {
		  	$lsTermo = str_replace(@$lsPalavra[$liIndice - 1] . " ", "",$lsTermo);
		  }
		  $lsCaracter[0] = substr(@$lsPalavra[$liIndice + 1], 0, 1);
		  $lsCaracter[1] = substr(@$lsPalavra[$liIndice - 1], 0, 1);
		  if( ($lsCaracter[0] != "<") && ($lsCaracter[1] != "<") ) {
			 if(strlen($lsPalavra[$liIndice]) == 3 ){
				$lsTermo = $lsTermo . "NEAR((" . @$lsPalavra[$liIndice - 1] . ","
						   . @$lsPalavra[$liIndice + 1] . "),1,TRUE) ";
			 }
			 else{
				$lsCaracter[0] 	= substr($lsPalavra[$liIndice], 3, strlen($lsPalavra[$liIndice]) - 3);
				$lsTermo 		= 	$lsTermo . "NEAR((" . @$lsPalavra[$liIndice - 1] . ","
									. @$lsPalavra[$liIndice + 1] . ")," . $lsCaracter[0] . ",TRUE) ";
			 }
		  }
		  else{
			 if( $lsCaracter[1] == "<" ){
				$lsCaracter[1] = Trata_Especial($liIndice, @$lsPalavra[$liIndice - 1], @$lsPalavra[$liIndice + 1], $lsPalavra[$liIndice]);
				$lsTermo = str_replace("<" . $lsPalavra[$liIndice - 1] . ">", $lsCaracter[1],$lsTermo);
			 }
			 else{
				$liAux = true;
				$lsCaracter[1] = str_replace("<", "",@$lsPalavra[$liIndice + 1]);
				$lsCaracter[1] = str_replace(">", "",$lsCaracter[1]);
				$gsExpressaoPar[$lsCaracter[1]] = Trata_Especial($liIndice, @$lsPalavra[$liIndice - 1], @$lsPalavra[$liIndice + 1], $lsPalavra[$liIndice]);
				$lsTermo = $lsTermo . "<" . $lsPalavra[$liIndice + 1] . ">";
			 }
			 $liFlag = 1;
		  }
		  $liIndice ++;
	   }
	   $liInicio = strpos(@$lsPalavra[$liIndice], "PROX"); # Tratamento para ocorrencia do PROX
	   if (!($liInicio === false)){
		  $liFlag = 1;
		  if($liIndiceOper != ($liIndice - 1))
		  		$lsTermo = str_replace(@$lsPalavra[$liIndice - 1] . " ","", $lsTermo);
		  //echo "\n\n<!-- #### ".$lsPalavra[$liIndice - 1] ." -->\n\n";
		  $lsCaracter[0] = substr(@$lsPalavra[$liIndice + 1], 0, 1);
		  $lsCaracter[1] = substr(@$lsPalavra[$liIndice - 1], 0, 1);
		  if (($lsCaracter[0] != "<") && ($lsCaracter[1] != "<"))  { # Then
			 if (strlen($lsPalavra[$liIndice]) == 4)  { # Then
				$lsTermo = $lsTermo . "NEAR((" . @$lsPalavra[$liIndice - 1] . "," . @$lsPalavra[$liIndice + 1] . "),1,FALSE) ";
			 }
			 else{
				$lsCaracter[0] = substr($lsPalavra[$liIndice], 4, strlen($lsPalavra[$liIndice]) - 4);
				$lsTermo = $lsTermo . "NEAR((" . @$lsPalavra[$liIndice - 1] . "," . @$lsPalavra[$liIndice + 1] . ")," . $lsCaracter[0] . ",FALSE) ";
			} # End If
		  }
		  else{
			 if ($lsCaracter[1] == "<")  { # Then
				$lsCaracter[1] = Trata_Especial($liIndice, @$lsPalavra[$liIndice - 1], @$lsPalavra[$liIndice + 1], $lsPalavra[$liIndice]);
				$lsTermo = str_replace("<" . @$lsPalavra[$liIndice - 1] . ">", $lsCaracter[1],$lsTermo);
			 }
			 else{
				$liAux = true;
				$lsCaracter[1] = str_replace("<", "",$lsPalavra[$liIndice + 1]);
				$lsCaracter[1] = str_replace(">", "",$lsCaracter[1]);
				$gsExpressaoPar[$lsCaracter[1]] = Trata_Especial($liIndice, @$lsPalavra[$liIndice - 1], @$lsPalavra[$liIndice + 1], $lsPalavra[$liIndice]);
				$lsTermo = $lsTermo . "<" . @$lsPalavra[$liIndice + 1] . ">";
			 } # End If
			 $liFlag = 1;
		  } # End If
		  $liIndice++;
	   } # End If
	   $liInicio = strpos(@$lsPalavra[$liIndice], "PERTO"); # Tratamento para ocorrencia do PERTO
	   if (!($liInicio === false)){ # Then
		  $liFlag = 1;
		  if($liIndiceOper != ($liIndice - 1))
		  		$lsTermo = str_replace(@$lsPalavra[$liIndice - 1] . " ","", $lsTermo);
		  //echo "\n\n<!-- #### ".$lsPalavra[$liIndice - 1] ." -->\n\n";
		  $lsCaracter[0] = substr(@$lsPalavra[$liIndice + 1], 0, 1);
		  $lsCaracter[1] = substr(@$lsPalavra[$liIndice - 1], 0, 1);
		  if (($lsCaracter[0] != "<") && ($lsCaracter[1] != "<"))  { # Then
			 if (strlen($lsPalavra[$liIndice]) == 5)  { # Then
				$lsTermo = $lsTermo . "NEAR((" . @$lsPalavra[$liIndice - 1] . "," . @$lsPalavra[$liIndice + 1] . "),1,FALSE) ";
			 }
			 else{
				$lsCaracter[0] = substr($lsPalavra[$liIndice], 5, strlen($lsPalavra[$liIndice]) - 5);
				$lsTermo = $lsTermo . "NEAR((" . $lsPalavra[$liIndice - 1] . "," . @$lsPalavra[$liIndice + 1] . ")," . $lsCaracter[0] . ",FALSE) ";
			} # End If
		  }
		  else{
			 if ($lsCaracter[1] == "<")  { # Then
				$lsCaracter[1] = Trata_Especial($liIndice, @$lsPalavra[$liIndice - 1], @$lsPalavra[$liIndice + 1], $lsPalavra[$liIndice]);
				$lsTermo = str_replace("<" . $lsPalavra[$liIndice - 1] . ">", $lsCaracter[1],$lsTermo);
			 }
			 else{
				$liAux = true;
				$lsCaracter[1] = str_replace("<", "",@$lsPalavra[$liIndice + 1]);
				$lsCaracter[1] = str_replace(">", "",$lsCaracter[1]);
				$gsExpressaoPar[$lsCaracter[1]] = Trata_Especial($liIndice, @$lsPalavra[$liIndice - 1], @$lsPalavra[$liIndice + 1], $lsPalavra[$liIndice]);
				$lsTermo = $lsTermo . "<" . @$lsPalavra[$liIndice + 1] . ">";
			 } # End If
			 $liFlag = 1;
		  } # End If
	   /*
		  $liFlag = 1;
		  if ($liIndiceOper != ($liIndice - 1))
		  		$lsTermo = str_replace($lsPalavra[$liIndice - 1] . " ","",$lsTermo);
		  $lsCaracter[0] = substr(1, 1, $lsPalavra[$liIndice + 1]);
		  $lsCaracter[1] = substr($lsPalavra[$liIndice - 1], 1, 1);
		  if (($lsCaracter[0] != "<") && ($lsCaracter[1] != "<"))  { # Then
			 if (strlen($lsPalavra[$liIndice]) == 5)  { # Then
				$lsTermo = $lsTermo . "NEAR((" . $lsPalavra[$liIndice - 1] . "," . $lsPalavra[$liIndice + 1] . "),1,FALSE) ";
			 }
			 else{
				$lsCaracter[0] = substr($lsPalavra[$liIndice], 5, strlen($lsPalavra[$liIndice]) - 5);
				$lsTermo = $lsTermo . "NEAR((" . $lsPalavra[$liIndice - 1] . "," . $lsPalavra[$liIndice + 1] . ")," . $lsCaracter[1] . ",FALSE) ";
			 } # End If
		  }
		  else{
			 if ($lsCaracter[1] == "<")  { # Then
				$lsCaracter[1] = Trata_Especial($liIndice, $lsPalavra[$liIndice - 1], $lsPalavra[$liIndice + 1], $lsPalavra[$liIndice]);
				$lsTermo = str_replace("<" . $lsPalavra[$liIndice - 1] . ">", $lsCaracter[1],$lsTermo);
			 }
			 else{
				$liAux = true;
				$lsCaracter[1] = str_replace("<", "",$lsPalavra[$liIndice + 1]);
				$lsCaracter[1] = str_replace(">", "",$lsCaracter[1]);
				$gsExpressaoPar[$lsCaracter[1]] = Trata_Especial($liIndice, $lsPalavra[$liIndice - 1], $lsPalavra[$liIndice + 1], $lsPalavra[$liIndice]);
				$lsTermo = $lsTermo . "<" . $lsPalavra[$liIndice + 1] . ">";
			 } # End If
			 $liFlag = 1;
		  } # End If
		  */
		  $liIndice++;
	   } # End If
	   if ($liFlag != 1)  { # Then
		  $lsTermo = $lsTermo . $lsPalavra[$liIndice] . " ";
	   } # End If
	   if ($liAux == true) { # Then
		  $lsTermo = str_replace("<" . $lsCaracter[1] . ">", $gsExpressaoPar[$lsCaracter[1]],$lsTermo);
		  $liAux = false;
	   } # End If.
	   $liFlag = 0;
	   $liIndice = $liIndice + 1;
	} # Wend
	$lsTermo = trim($lsTermo);
	return $lsTermo;
} # End Function

function Trata_Especial($vIndice,$vPalavraAnt,$vPalavraPos,$vPalavra){
# Tratará os casos de ADJ, PERTO e PROX que possuem expressoes entre parenteses como parâmetros de
# busca, e faz a combinação entre eles. Ex: (casa ou carro) adj5 hoje -> será igual a
# (casa adj5 hoje ou carro adj5 hoje)
	global $gsExpressaoPar;
	$liInicio 	= 0;
	$liFim 		= 0;
	$liOper		= 0;

	$lsTag[0] = substr($vPalavraAnt, 0, 1);
	$lsTag[1] = substr($vPalavraPos, 0, 1);
	if( ($lsTag[0] == "<") && ($lsTag[1] == "<") )  { # Then
	   $vPalavraAnt = str_replace("<", "",$vPalavraAnt);
	   $vPalavraAnt = str_replace(">", "",$vPalavraAnt);
	   $vPalavraPos = str_replace("<", "",$vPalavraPos);
	   $vPalavraPos = str_replace(">", "",$vPalavraPos);$Control9=0;
	   while($liFim <= strlen($gsExpressaoPar[$vPalavraAnt])){
		 $Control9++;if($Control9>210)break;
		 $liOper++;
		 $liFim = strpos($gsExpressaoPar[$vPalavraAnt], " ",$liInicio);
		 if ($liFim = 0)
				$liFim = strlen($gsExpressaoPar[$vPalavraAnt]) + 1;
		 $lsExp1[$liOper] = substr($gsExpressaoPar[$vPalavraAnt], $liInicio, ($liFim - $liInicio) );
		  $liInicio = $liFim + 1;
	   } # Wend
	   $liInicio = 1;
	   $liFim = 0;
	   $liOper = 0;$Control10 = 0;
	   while ($liFim < strlen($gsExpressaoPar[$vPalavraPos]) ){
	   $Control10++;if($Control10>210)break;
		  $liOper++;
		  $liFim = strpos($gsExpressaoPar[$vPalavraPos], " ",$liInicio);
		  if ($liFim = 0)
				$liFim = strlen($gsExpressaoPar[$vPalavraPos]) + 1;
		 $lsExp2[$liOper] = substr($gsExpressaoPar[$vPalavraPos], $liInicio, ($liFim - $liInicio) );
		  $liInicio = $liFim + 1;
	   } # Wend
	   $liInicio 	= 1;
	   $liOper 		= 1;
	   $lsExp 		= "";$Control11=0;
	   while ($liInicio <= sizeof($lsExp1)){$Control11++;if($Control11>110)break;
		  $liFim = strpos($vPalavra, "PROX",0);
		  if (!($liFim === false))  { # Then
			 if (strlen($vPalavra) == 4)  { $Control12 = 0;# Then
				while ($liOper <= sizeof($lsExp2)){ $Control12++;if($Control12>110)break;
					$lsExp = $lsExp . "NEAR((" .$lsExp1[$liInicio] . "," .$lsExp2[$liOper] . "),1,FALSE) OR ";
					$liOper = $liOper + 2;
				} # Wend
			 }
			 else{
				$lsTag[0] = substr($vPalavra, 4, strlen($vPalavra) - 4);$Control13=0;
				while ($liOper <= sizeof($lsExp2)){$Control13++;if($Control13>110)break;
				  $lsExp = $lsExp . "NEAR((" .$lsExp1[$liInicio] . "," .$lsExp2[$liOper] . ")," . $lsTag[0] . ",FALSE) OR ";
				   $liOper = $liOper + 2;
				} # Wend
			 } # End If
		  } # End If
		  $liFim = strpos($vPalavra, "ADJ",0);
		  if (!($liFim === false))  { # Then
			 if (strlen($vPalavra) == 3)  {$Control12 = 0; # Then
				while ($liOper <= sizeof($lsExp2) ){$Control12++;if($Control12>110)break;
				  $lsExp = $lsExp . "NEAR((" .$lsExp1[$liInicio] . "," . $lsExp2[$liOper] . "),1,TRUE) OR ";
				   $liFim = $liFim + 2;
				} # Wend
			 }
			 else{
				$lsTag[0] = substr($vPalavra, 3, strlen($vPalavra) - 3); $Control12 = 0;
				while ($liOper <= sizeof($lsExp2) ){ $Control12++;if($Control12>110)break;
				  $lsExp = $lsExp . "NEAR((" . $lsExp1[$liInicio] . "," .$lsExp2[$liOper] . ")," . $lsTag[0] . ",TRUE) OR ";
				   $liOper = $liOper + 2;
				} # Wend
			 } # End If

		  } # End If
		  $liFim = strpos($vPalavra, "PERTO");
		  if (!($liFim === false))  { # Then
			 if (strlen($vPalavra) == 5)  {$Control12 = 0; # Then
				while ($liOper <= sizeof($lsExp2)){  $Control12++;if($Control12>110)break;
				  $lsExp = $lsExp . "NEAR((" .$lsExp1[$liInicio] . "," .$lsExp2[$liOper] . "),1,FALSE) OR ";
				   $liOper = $liOper + 2;
				} # Wend
			 }
			 else{
				$lsTag[0] = substr($vPalavra, 5, strlen($vPalavra) - 5); $Control12 = 0;
				while ($liOper <= sizeof($lsExp2)){ $Control12++;if($Control12>110)break;
				  $lsExp = $lsExp . "NEAR((" . $lsExp1[$liInicio] . "," . $lsExp2[$liOper] . ")," . $lsTag[0] . ",FALSE) OR ";
				  $liOper = $liOper + 2;
				} # Wend
			 } # End If
		  } # End If
		  $liInicio = $liInicio + 2;
		  $liOper = 1;
	   } # Wend
	  $lsExp = substr(lsExp, 0, strlen($lsExp) - 4);
	  $lsExp = "(" .$lsExp . ")";
	}
	else{
	   if ($lsTag[0] == "<")  { # Then
		  $vPalavraAnt = str_replace("<", "",$vPalavraAnt);
		  $vPalavraAnt = str_replace(">", "",$vPalavraAnt);$Control12 = 0;
		  while ($liFim <= strlen($gsExpressaoPar[$vPalavraAnt])){  $Control12++;if($Control12>210)break;
			 $liOper = $liOper + 1;
			 $liFim = strpos($gsExpressaoPar[$vPalavraAnt], " ");
			 if ($liFim === false)
					$liFim = strlen($gsExpressaoPar[$vPalavraAnt]) + 1;
			 $lsOperador[$liOper] = substr($gsExpressaoPar[$vPalavraAnt], $liInicio, $liFim - $liInicio);
			 $liInicio = $liFim + 1;
		  } # Wend
		  $liInicio = 1;
		  $lsExp = "";$Control12 = 0;
		  while ($liInicio <= sizeof($lsOperador)){$Control12++;if($Control12>210)break;
			 $liFim = strpos($vPalavra, "PROX");
			 if (!($liFim === false))  { # Then
				if (strlen($vPalavra) == 4){   # Then
				  $lsExp = $lsExp . "NEAR((" . $lsOperador[$liInicio] . "," . $vPalavraPos . "),1,FALSE)";
				}
				else{
				  $lsTag[0] = substr($vPalavra, 4, strlen($vPalavra) - 4);
				  $lsExp = $lsExp . "NEAR((" . $lsOperador[$liInicio] . "," . $vPalavraPos . ")," . $lsTag[0] . ",FALSE)";
				} # End If
			 } # End If
			 $liFim = strpos($vPalavra, "ADJ");
			 if (!($liFim === false)){ # Then
				if (strlen($vPalavra) == 3)  { # Then
				  $lsExp = $lsExp . "NEAR((" . $lsOperador[$liInicio] . "," . $vPalavraPos . "),1,TRUE)";
				}
				else{
				  $lsTag[0] = substr($vPalavra, 3, strlen($vPalavra) - 3);
				  $lsExp = $lsExp . "NEAR((" . $lsOperador[$liInicio] . "," . $vPalavraPos . ")," . $lsTag[0] . ",TRUE)";
				} # End If
			 } # End If
			 $liFim = strpos($vPalavra, "PERTO");
			 if (!($liFim === false))  { # Then
				if (strlen($vPalavra) == 5)  { # Then
				  $lsExp = $lsExp . "NEAR((" . $lsOperador[$liInicio] . "," . $vPalavraPos . "),1,FALSE)";
				}
				else{
				  $lsTag[0] = substr($vPalavra, 5, strlen($vPalavra) - 5);
				  $lsExp = $lsExp . "NEAR((" . $lsOperador[$liInicio] . "," . $vPalavraPos . ")," . $lsTag[0] . ",FALSE)";
				} # End If
			 } # End If
			 if ($liInicio != sizeof($lsOperador))  { # Then
			   $lsExp = $lsExp . " " . $lsOperador[$liInicio + 1] . " ";
			 }
			 else{
			   $lsExp = " (" .$lsExp . ") ";
			 } # End If
			 $liInicio = $liInicio + 2;
		  } # Wend
	   } # End If
	   if ($lsTag[1] == "<")  { # Then
		  $vPalavraPos = str_replace("<", "",$vPalavraPos);
		  $vPalavraPos = str_replace(">", "",$vPalavraPos);$Control12 = 0;
		  while ($liFim <= strlen($gsExpressaoPar[$vPalavraPos])){ $Control12++;if($Control12>110)break;
			 $liOper = $liOper + 1;
			 $liFim = strpos($gsExpressaoPar[$vPalavraPos], " ");
			 if ($liFim === false)
					$liFim = strlen($gsExpressaoPar[$vPalavraPos]) + 1;
			 $lsOperador[$liOper] = substr($gsExpressaoPar[$vPalavraPos], $liInicio, $liFim - $liInicio);
			 $liInicio = $liFim + 1;
		  } # Wend
		  $liInicio = 1;
		  $lsExp = ""; $Control12=0;
		  while ($liInicio <= sizeof($lsOperador)){ $Control12++;if($Control12>210)break;
			 $liFim = strpos($vPalavra, "PROX");
			 if (!($liFim === false))  { # Then
				if (strlen($vPalavra) == 4)  { # Then
				  $lsExp = $lsExp . "NEAR((" . $vPalavraAnt . "," . $lsOperador[$liInicio] . "),1,FALSE)";
				}
				else{
				   $lsTag[0] = substr($vPalavra, 4, strlen($vPalavra) - 4);
				  $lsExp = $lsExp . "NEAR((" . $vPalavraAnt . "," . $lsOperador[$liInicio] . ")," . $lsTag[0] . ",FALSE)";
				} # End If
			 } # End If
			 $liFim = strpos($vPalavra, "ADJ");
			 if (!($liFim === false)) { # Then
				if (strlen($vPalavra) == 3)  { # Then
				  $lsExp = $lsExp . "NEAR((" . $vPalavraAnt . "," . $lsOperador[$liInicio] . "),1,TRUE)";
				}
				else{
				   $lsTag[0] = substr($vPalavra, 3, strlen($vPalavra) - 3);
				  $lsExp = $lsExp . "NEAR((" . $vPalavraAnt . "," . $lsOperador[$liInicio] . ")," . $lsTag[0] . ",TRUE)";
				} # End If
			 } # End If
			 $liFim = strpos($vPalavra, "PERTO");
			 if (!($liFim === false))  { # Then
				if (strlen($vPalavra) == 5)  { # Then
				  $lsExp = $lsExp . "NEAR((" . $vPalavraAnt . "," . $lsOperador[$liInicio] . "),1,FALSE)";
				}
				else{
				  $lsTag[0] = substr($vPalavra, 5, strlen($vPalavra) - 5);
				  $lsExp = $lsExp . "NEAR((" . $vPalavraAnt . "," . $lsOperador[$liInicio] . ")," . $lsTag[0] . ",FALSE)";
				} # End If
			 } # End If
			 if ($liInicio != sizeof($lsOperador))  { # Then
			   $lsExp = $lsExp . " " . $lsOperador[$liInicio + 1] . " ";
			 }
			 else{
			   $lsExp = "AND (" .$lsExp . ") ";
			 } # End If
			 $liInicio = $liInicio + 2;
		  } # Wend
	   } # End If
	} # End If
	return $lsExp;
} # End Function

function MontaExpressaoIntermedia($txtentrada,$localparampes=""){
	if((!isset($txtentrada))||(@trim($txtentrada)==""))
		return "";
	else{
	#######################################################
		$CaracterFix 	= array("\\\\","UPDATE","DROP ","DELETE","NÃO "," NAO "," ~ "  ,"!"," ADJ "  ," PERTO"," PROX" ," MESMO"," AND " ," | " ," E ","$"," - ","- "," -",".","-","ª","º"," & ","*"," OU ","\'"  ,";","/",",", "(",")","\"","","\/","\\");
		$CaracterText 	= array(""    ,""      ,""     ,""      ,"NOT "," NOT "," NOT "," "," NEAR " ," NEAR" ," NEAR" ," NEAR#"," "     ," OR "," "  ,"%","-"  ,"-" ,"-" ,"%","%","$","$"," "  ,"%"," OR ","''''","_","_","_", "_","_","_" ,"","_" ,"_");
		$TempTextoPes = trim($txtentrada);
		$TempTextoPes = str_replace("   "," ",$TempTextoPes);
		$TempTextoPes = str_replace("  "," ",$TempTextoPes);
		$FlagMesmo = strpos($TempTextoPes," MESMO");
		if($FlagMesmo === false)
			$FlagMesmo = false;
		else
			$FlagMesmo = true;

		if(($FlagMesmo)||(strpos($TempTextoPes," NEAR")==true)||(strpos($TempTextoPes," PERTO")==true)||(strpos($TempTextoPes," ADJ")==true)){
			$TempTextoPes = @str_replace("(","",$TempTextoPes);
			$TempTextoPes = @str_replace(")","",$TempTextoPes);
		}
		else{
			$TempTextoPes = @str_replace("(","[#[#]",$TempTextoPes);
			$TempTextoPes = @str_replace(")","[#]#]",$TempTextoPes);
		}

		$TextoPesModifCaracter = str_replace($CaracterFix, $CaracterText, $TempTextoPes);
		$TextoPesModifCaracter = str_replace("  ","",$TextoPesModifCaracter);
			//echo "<!--2\n\n[==> " . $TempTextoPes ."\n\n". $TextoPesModifCaracter . "\n\n-->";
		$Expressao[0] = "";
		$ExpressaoFinal = "";
		$Distancia = "";
		$Anterior = "";
		$ContaNovoItem = 0;
		$PosInternaNear = false;
		$FlagPosInternaNear=false;

		$TextoPesModifCaracter = str_replace(" NEAR AND "," NEAR ",$TextoPesModifCaracter);
		$TextoPesModifCaracter = str_replace(" AND NEAR "," NEAR ",$TextoPesModifCaracter);
		$TextoPesModifCaracter = str_replace(" NEAR OR "," NEAR ",$TextoPesModifCaracter);
		$TextoPesModifCaracter = str_replace(" OR NEAR "," NEAR ",$TextoPesModifCaracter);
		//$TextoPesModifCaracter = str_replace(" AND [ AND "," AND ",$TextoPesModifCaracter);
		//$TextoPesModifCaracter = str_replace("[ AND ]"," AND ",$TextoPesModifCaracter);
		//$TextoPesModifCaracter = str_replace("[ AND ]"," AND ",$TextoPesModifCaracter);

		$TextoPesModifCaracter = str_replace("","",$TextoPesModifCaracter);
		$ArrTextoPesModifCaracter = explode(" ",$TextoPesModifCaracter);
		reset ($ArrTextoPesModifCaracter);
		$ArrTextoPesModifCaracterTmp = explode(" ",$TextoPesModifCaracter);
		$FlagPosAr="0";
		for($key=0;$key<count($ArrTextoPesModifCaracter);$key++){
			if(count($ArrTextoPesModifCaracter)==1){
				$Expressao[$ContaNovoItem] = $ArrTextoPesModifCaracter[$key];
				$ContaNovoItem++;
				$FlagPosAr="1";
			}
			else{
				$PosInternaNear=@strpos($ArrTextoPesModifCaracter[$key+1],"NEAR");
				if($PosInternaNear===false){
					$Expressao[$ContaNovoItem] = $ArrTextoPesModifCaracter[$key];
					$FlagPosAr="2";$ContaNovoItem++;
				}
				else{
					$value = $ArrTextoPesModifCaracter[$key+1];
					$Distancia = str_replace("NEAR","",$value);//echo "<br>=[" . $value ."][". $Distancia . "]=<br>";
					if(VerificaVariavel($Distancia)){
						if($Distancia!="#"){
							if(!(is_numeric($Distancia))){
								$Distancia = ")" ;
							}
							else{
								$Distancia = ($Distancia * 1);
								if($Distancia>100)
									$Distancia = 100;
								$Distancia = "," . $Distancia . ")";
							}

						}
						else
							$Distancia = ") [##]";
					}
					else
						$Distancia = ",1)";
					$Expressao[$ContaNovoItem] = "NEAR((" . $ArrTextoPesModifCaracter[$key] .",".$ArrTextoPesModifCaracter[$key+2].")" . $Distancia;
					$ContaNovoItem++;$key++;
					if(VerificaVariavel($ArrTextoPesModifCaracter[$key+1])){
						$PosInternaNear=@strpos($ArrTextoPesModifCaracter[$key+1],"NEAR");
						if(!($PosInternaNear===false))
							$key++;
					}
					$FlagPosAr="3";
				}
			}
		}
		for($key=0;$key<count($Expressao);$key++){
			if(strlen($Expressao[$key])>2)
				$ExpressaoFinal .= (@VerificaVariavel($ExpressaoFinal) ? " AND " : "" ) . $Expressao[$key];
		}
		$ExpressaoFinal = str_replace(" AND OR AND "," OR ",$ExpressaoFinal);
		$ExpressaoFinal = str_replace(" AND NOT AND "," NOT ",$ExpressaoFinal);
		session_unregister($TextoPesModifCaracter);
		$TextoPesModifCaracter = trim($ExpressaoFinal);
		# Trata os parênteses
		$TextoPesModifCaracter = @str_replace("[#[#]","(",$TextoPesModifCaracter);
		$TextoPesModifCaracter = @str_replace("[#]#]",")",$TextoPesModifCaracter);

		$PosInternaNear=@strpos($TextoPesModifCaracter,"NEAR");
		if($PosInternaNear===false){
			$TextoPesModifCaracter = @str_replace("(","_",$TextoPesModifCaracter);
			$TextoPesModifCaracter = @str_replace(")","_",$TextoPesModifCaracter);
		}

		if(trim($localparampes)=="")
			$TextoPesModifCaracter = str_replace("[##]","" . $localparampes,$TextoPesModifCaracter);
		else
			$TextoPesModifCaracter = str_replace("[##]"," WITHIN " . $localparampes,$TextoPesModifCaracter);

		return @strtoupper($TextoPesModifCaracter);
		#######################################################
	}
}
function TrataBarra($txtPas){
	while(!(strpos($txtPas,"\\")===false))
		$txtPas =  str_replace("\\"," ",$txtPas);
	while(!(strpos($txtPas,"'")===false))
		$txtPas =  str_replace("'"," ",$txtPas);
	return $txtPas;
}
function TrataBR($VrCampo="",$VrSubstitui=" "){
	if(isset($VrCampo)){
		if(trim($VrCampo)!=""){
			$VrCampo = str_replace("\n","<#br#>",$VrCampo);
			$VrCampo = str_replace("\r","",$VrCampo);
			$VrCampo = str_replace(".<#br#>",".<br>",$VrCampo);
			$VrCampo = str_replace("<#br#>",$VrSubstitui,$VrCampo);
		}
	}
	return $VrCampo;
}
function LimpaExpressaoInter($EntraArgPesTxt){
	$ArrayTrata = array('A','E','I','O','U','DA','DE','DO','EM','OU','OR','SE','TE','TI','POR','AND','NA','NE','NI','NO','NU','AS','1','2','3','4','5','6','7','8','9');
	for ($i=0;$i<sizeof($ArrayTrata);$i++) {
		$EntraArgPesTxt = str_replace(" AND ".$ArrayTrata[$i]." AND ", " AND ",$EntraArgPesTxt);
		$EntraArgPesTxt	= str_replace(" OR " .$ArrayTrata[$i] ." OR ", " OR " ,$EntraArgPesTxt);
	}
	while (substr($EntraArgPesTxt,strlen($EntraArgPesTxt)-4,4)==" AND"){
		$EntraArgPesTxt = substr($EntraArgPesTxt,0,strlen($EntraArgPesTxt)-4);
	}
	while (substr($EntraArgPesTxt,strlen($EntraArgPesTxt)-3,3)==" OR"){
		$EntraArgPesTxt = substr($EntraArgPesTxt,0,strlen($EntraArgPesTxt)-3);
	}
	return $EntraArgPesTxt;
}
function RemoveCaracteresAlpha($obj="") {
	$str1 = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","X","Y","W","Z");
	$str2 = array("","","","","","","","","","","","","","","","","","","","","","","","","","");
	$str = str_replace($str1,$str2,$obj);
    return $str;
}
function RemoveCaracteresAlphaAbc($TextLivPesq="") {
	$Invalido = array( 'Š','Ž','š','ž','Ÿ','À','Á','Â','Ã','Ä','Å','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ñ',
	'Ò','Ó','Ô','Õ','Ö','Ø','Ù','Ú','Û','Ü','Ý','à','á','â','ã','ä','å','ç','è','é','ê',
	'ë','ì','í','î','ï','ñ','ò','ó','ô','õ','ö','ø','ù','ú','û','ü','ý','ÿ',
	'Þ','þ','Ð','ð','ß','Œ','œ','Æ','æ','µ',
	'"',"'",'“','”',"\n","\r");

	$Valido = array( 'S','Z','s','z','Y','A','A','A','A','A','A','C','E','E','E','E','I','I','I','I','N',
	'O','O','O','O','O','O','U','U','U','U','Y','a','a','a','a','a','a','c','e','e','e',
	'e','i','i','i','i','n','o','o','o','o','o','o','u','u','u','u','y','y',
	'TH','th','DH','dh','ss','OE','oe','AE','ae','u',
	' ',' ',' ',' ',' ',' '
	);
	$Liberados = array(';',':','.',',','-','=','_','*','&','%','$','#','@','+','/','?','<','>',')','(');
	// replace strange characters with alphanumeric equivalents
	$TextLivPesq = str_replace( $Invalido, $Valido, $TextLivPesq );
	$TextLivPesq = trim($TextLivPesq);
	for ($i=0;$i<strlen($TextLivPesq);$i++) {
		$char = $TextLivPesq[$i];
		$genNum = ord($char);
		if(!(
				( ($genNum > 64)&&($genNum < 91  ))||  # A .... Z
				( ($genNum > 96)&&($genNum < 123 ))||  # a .... z
				( ($genNum > 47)&&($genNum < 58  ))||  # 0 .... 9
				( (in_array($TextLivPesq[$i], $Liberados, true)) )
				)
			){
			$TextLivPesq[$i] = " ";
		}
	}
	return $TextLivPesq;
}
function listChr(){
  for ($i = 0; $i < 256; ++$i) {
  	static $genNum;
  	$genNum++;
	//echo "chr($genNum) ==> " . chr($genNum)."<br>";
  }
}
function LimpaNumericoTxt($NumLivre="") {
	$Liberados = array('1','2','3','4','5','6','7','8','9','0');
	$NumLivre = trim($NumLivre);
	for ($i=0;$i<strlen($NumLivre);$i++) {
		$char = $TextLivPesq[$i];
		if(!(in_array($NumLivre[$i], $Liberados, true))){
			$NumLivre[$i] = " ";
		}
	}
	$NumLivre = str_replace(" ","",$NumLivre);
	return $NumLivre;
}
function CharsDeUmTexto($txtName=""){
	if(trim($txtName!="")){
		for ($i=0;$i<strlen($txtName);$i++) {
			$char = $txtName[$i];
			$decoded = ord($char);
			echo "char(".$decoded.") = " . $char . "<br>";
		}
	}
}
# Remove todos os caracteres não numéricos
function LimpaVariavelNumerica($txtName){
	for ($i=0;$i<strlen($txtName);$i++) {
		$char = $txtName[$i];
		$genNum = ord($char);
		if(!(
				( ($genNum > 47)&&($genNum < 58) )  # 0 .... 9
			)# .
		){
			$txtName[$i] = "_";
		}
	}
	$txtName = str_replace("___","__",$txtName);
	$txtName = str_replace("__","_",$txtName);
	$txtName = str_replace("_","",$txtName);
	return $txtName;
}
# Remove todos os caracteres fora do escopo definido e substitui por andescor(_)
function LimpaCaracteresTexto($txtName=""){
	for ($i=0;$i<strlen($txtName);$i++) {
		$char = $txtName[$i];
		$genNum = ord($char);
		if(!(
				( ($genNum > 64)&&($genNum < 91) ) ||  # A .... Z
				( ($genNum > 96)&&($genNum < 123) )||  # a .... z
				(  $genNum == 95)|| # _
				(  $genNum == 46)|| # _
				(  $genNum == 183) )# .
			){
			$txtName[$i] = "_";
		}
	}
	$txtName = str_replace("___","__",$txtName);
	$txtName = str_replace("__","_",$txtName);
	return $txtName;
}
# Remove todos os caracteres fora do escopo (A..Z Maiusc. e Minusc. e Numericos)
function MantemCharNumero($txtName=""){
	for ($i=0;$i<strlen($txtName);$i++) {
		$char = $txtName[$i];
		$genNum = ord($char);
		if(!(
				( ($genNum > 64)&&($genNum < 91) ) ||  # A .... Z
				( ($genNum > 96)&&($genNum < 123) )||  # a .... z
				( ($genNum > 47)&&($genNum < 58) )  # 0 .... 9
				)
			){
			$txtName[$i] = "";
		}
	}
	return $txtName;
}
# Remove todos os caracteres fora do escopo (A..Z Maiusc. e Minusc. e Numericos)
function RemoveCaracteresEspecial($txtName=""){
	for ($i=0;$i<strlen($txtName);$i++) {
		$char = $txtName[$i];
		$genNum = ord($char);
		if(!(
				( ($genNum > 64)&&($genNum < 91  )) ||  # A .... Z
				( ($genNum > 96)&&($genNum < 123 ))||   # a .... z
				( ($genNum > 47)&&($genNum < 58  ))||   # 0 .... 9
				( ($genNum > 191)&&($genNum < 198))||   # Ç .... É
				( ($genNum > 198)&&($genNum < 208))||   # Ç .... É
				( ($genNum > 209)&&($genNum < 221))     # ô .... ù*/
				)
			){
			$txtName[$i] = " ";
		}
	}
	return $txtName;
}

# Remove todos os acentos        #
function RemoveAcentos($string){
 return strtr(
  strtr($string,
   'ŠŽšžŸÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÑÒÓÔÕÖØÙÚÛÜÝàáâãäåçèéêëìíîïñòóôõöøùúûüýÿ',
   'SZszYAAAAAACEEEEIIIINOOOOOOUUUUYaaaaaaceeeeiiiinoooooouuuuyy'),
  array('Þ' => 'TH', 'þ' => 'th', 'Ð' => 'DH', 'ð' => 'dh', 'ß' => 'ss',
   'Œ' => 'OE', 'œ' => 'oe', 'Æ' => 'AE', 'æ' => 'ae', 'µ' => 'u'));
}
function RemoveAcentosAbc($Msg){
	  $a = array(
		 '/[ÂÀÁÄÃ]/'=>'A',
		 '/[âãàáä]/'=>'a',
		 '/[ÊÈÉË]/'=>'E',
		 '/[êèéë]/'=>'e',
		 '/[ÎÍÌÏ]/'=>'I',
		 '/[îíìï]/'=>'i',
		 '/[ÔÕÒÓÖ]/'=>'O',
		 '/[ôõòóö]/'=>'o',
		 '/[ÛÙÚÜ]/'=>'U',
		 '/[ûúùü]/'=>'u',
		 '/ç/'=>'c',
		 '/Ç/'=> 'C'
	 );
	 // Tira o acento pela chave do array
	  return strtoupper(preg_replace(array_keys($a), array_values($a), $Msg));
	/*
	 // como usar
	 echo RemoveAcentos("Amanhã não irei caçar")
	*/
 }

function RemoveAtributosIndesejados($tagSource)
{
	   $stripAttrib = "' (style|class)=\"(.*?)\"'i";
	   $tagSource = stripslashes($tagSource);
	   $tagSource = preg_replace($stripAttrib, '', $tagSource);
	   return $tagSource;
}
# Remove tags indesejadas
function RemoveTagsIndesejadas($source)
{
   $allowedTags='<a><br><i>' .
			 '<li><ol><b><strong><table>' .
			 '<tr><td><th><u><ul>';
   $source = strip_tags($source, $allowedTags);
   return preg_replace('/<(.*?)>/ie', "'<'.RemoveAtributosIndesejados('\\1').'>'", $source);
}
function LimpaTextoHtml($Texto){
	# Substitui algumas tags
	$Texto = str_replace("<P ","&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<P ",$Texto);
	$Texto = str_replace("<p ","&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p ",$Texto);
	$Texto = str_replace("</P>","<br>",$Texto);
	$Texto = str_replace("</p>","<br>",$Texto);
	/*
	$Texto = str_replace("<B> ","<B><strong> ",$Texto);
	$Texto = str_replace("<b> ","<b><strong> ",$Texto);
	$Texto = str_replace("</B>","</B></strong>",$Texto);
	$Texto = str_replace("</b>","</b></strong>",$Texto);
	*/
	# Remove tags indesejadas
	$Texto = RemoveTagsIndesejadas($Texto);
	$Texto = RemoveAtributosIndesejados($Texto);
	/*
	# Inicializa as variáveis
	$TempSemiTotalStyle		= "";
	$TempSemiTotalStyle1  	= "";
	$TempSemiTotalStyle2 	= "";
	$Indic[0] = "<script";
	$GatoCont = 0;
	for($x=0;$x<sizeof($Indic);$x++){echo "Foi" . $Texto;exit;
		while(!(strpos($Texto,$Indic[$x],0)===false)){echo "Foi";
			$inicio = strpos($Texto,$Indic[$x],0);
			$TempSemiTotalStyle1 = substr($Texto,0,$inicio);
			echo "\n\r ---------------------\n\r " . $TempSemiTotalStyle1; exit;
			$TempSemiTotalStyle = substr($Texto,$inicio+8,strlen($Texto));
			$fim 	= strpos($TempSemiTotalStyle,"<\/script>",0)+1;
			$TempSemiTotalStyle2 = substr($TempSemiTotalStyle,$fim+1);//,
			$Texto = $TempSemiTotalStyle1 ."\n\r######\n\r". $TempSemiTotalStyle2;
			//echo $Texto;
			$GatoCont++;
			if($GatoCont>=500)break;
			//exit;
		}
	}
	*/
	return $Texto;
}
# Verifica a quantidade de um caracter em uma string - #
function ContaCaracter($Texto,$Caracter,$Limite=1){
	$ContaQtCaracter = 0;
	while(strpos($Texto, "@")  == true){
		$Texto = substr($Texto,strpos($Texto,$Caracter)+1,strlen($Texto));
		$ContaQtCaracter++;
	}
	if($ContaQtCaracter>$Limite)
		return false;
	else
		return true;
}
# COMPLETA UMA STRING COM UM CARACTER
function ComplCaracter($src,$carac,$tam,$pos="0"){
	$gat = 0;
	while(strlen($src)<$tam){
		$gat++;
		if($pos=="0")
			$src = $carac . $src;
		else
			$src = $src . $carac;
		if($gat > 30)break;
	}
	return $src;
}
function formataMoney($numero){
	$temformat = "" . $numero;
	if((isset($numero))&&(is_numeric($numero))){
		$temformat = number_format($numero, 2, ',', '.');
		$TempFormat = explode(",",$temformat);
		if(isset($TempFormat[1])){
			if(strlen($TempFormat[1])<2){
				$TempFormat[1] = $TempFormat[1] . "0";
			}
			$temformat = $TempFormat[0] . "," .$TempFormat[1];
		}
	}
	//$formata = substr(formata,instr(temformat," "));
	//format(numero,"###.##0,00")
	return $temformat;
}
function FormataNum($Num=""){
		$Retorno = trim($Num);
		$InicioRetorno = "";
		$FimRetorno = "";
		if($Retorno!=""){
			if(!(strpos($Retorno,",")===false)){
				$Retorno = ( substr($Retorno,0,1)=="," ? "0" . $Retorno : $Retorno);
				$PosVirgula = strpos($Retorno,",");
				$InicioRetorno = substr($Retorno,0,$PosVirgula);
				$FimRetorno = substr($Retorno,$PosVirgula,strlen($Retorno)-$PosVirgula);
				while(strlen($FimRetorno)<3)
					$FimRetorno = $FimRetorno . "0";

				$InicioRetorno = number_format($InicioRetorno, 2, ',', '.');
				$PosVirgula = strpos($InicioRetorno,",");
				$InicioRetorno = substr($InicioRetorno,0,$PosVirgula);
			}
			else{
				$InicioRetorno = $Retorno;
				$InicioRetorno = number_format($InicioRetorno, 2, ',', '.');
			}
			$Retorno = $InicioRetorno.$FimRetorno;
		}
		return $Retorno;
	}

# Verifica se o ermail é válido     ##################################
function VerificaMail($EmailVerif){
	if(trim($EmailVerif) != ""){
		 if(
		 	//(strpos($EmailVerif, ",")   == true) or
			(strpos($EmailVerif, ">")   == true) or
			(strpos($EmailVerif, "<")   == true) or
			(strpos($EmailVerif, "..")  == true) or
			(strpos($EmailVerif, "http")== true) or
			(strpos(strtoupper($EmailVerif), "HOTMAIL.COM.BR")== true) or
			(strpos(strtolower($EmailVerif), "hotmail.com.br")== true) or
			(strpos($EmailVerif, "/")   == true) or
			(strpos($EmailVerif, ";")   == true) or
			(strpos($EmailVerif, "ç")   == true) or
			(strpos($EmailVerif, "á")   == true) or
			(strpos($EmailVerif, ".@")  == true) or
			(strpos($EmailVerif, "@.")  == true) or
			(strpos($EmailVerif, ".br-") == true) or
			//(!ContaCaracter($EmailVerif,"@"))or
			(strpos($EmailVerif, "`") == true) or
			(strpos($EmailVerif, "´") == true) or
			(strpos($EmailVerif, "~") == true) or
			(strpos($EmailVerif, ":") == true) or
			(strpos($EmailVerif, "!") == true) or
			(strpos($EmailVerif, ". br") == true) or
			(strpos($EmailVerif, "@-") == true) or
			//(strpos(trim($EmailVerif), " ") == true) or
			(strpos($EmailVerif, "(")   == true) or
			(strpos($EmailVerif, "@")   == false) or
			(substr($EmailVerif,0,1)==".") or
			(substr($EmailVerif,strlen($EmailVerif)-1,1)==".") or
			(substr(trim($EmailVerif),strlen($EmailVerif)-1,1)==".") or
			(substr(trim($EmailVerif),strlen($EmailVerif)-1,1)=="@") or
			(trim($EmailVerif)=="")
			){
				return false;
			}
			else{
				$VarArrayArroba = explode("@",$EmailVerif);
				if(sizeof($VarArrayArroba)==2)
					return true;
				else
					return false;
			}
		}
		else{
			return false;
		}
}
function checkarEmail($email)
{
	//eregi("^([0-9a-zA-Z]+)([.,_-]([0-9a-zA-Z]+))*[@]([0-9a-zA-Z]+)([.,_-]([0-9a-zA-Z]+))*[.,_-]([0-9a-zA-Z]){2}([0-9a-zA-Z])?$",$email,$match);
	eregi("([\.\&_0-9A-Za-z\-]+)@([\&\_0-9A-Za-z\-]+)(\.[0-9A-Za-z\.\-]+)",$email,$match);
  //eregi("([\._0-9A-Za-z-]+)@([0-9A-Za-z-]+)(\.[0-9A-Za-z\.]+)",$email,$match);
	//Divide os valores dos casamentos da ER e separa em variáveis, $email_comp é o email completo para você verificar, portanto se a variável $email_comp for igual a $email o e-mail será válido
	list($email_comp,$login,$domain,$sufixies) = $match;
	//Inicia a verificação do email, conforme dito, se $email_comp for igual a $email, o email será válido
	//echo $email_comp ."==" . $email . "<br><br>";
	if ($email_comp == $email)
	{
		return true;
		/** Instruções caso o e-mail seja válido aqui **/
	}else{
		return false;
		/** Instruções caso o e-mail seja INválido aqui **/
	}
}
function Trf1EnviaMail(	$Origem="TRF 1ª Região", $Destino="", $DestinoCopia="",
						$DestinoOcultos="",$Assunto="TRF 1ª Região",$Mensagem="",
						$VetorArquivos="",$Formato="text/html"
						){
	/* Exemplos de chamada #
	Trf1EnviaMail(	Origem,
			Destino(s),    			=> Separar por vírgula os emails - é obrigatório preencher um dos dois(Destino/Destino(s) Oculto)
			Destino(s) Cópia,    	=> Separar por vírgula os emails - Não é obrigatório preencher
			Destino(s) Oculto(s),	=> Separar por vírgula os emails - Não é obrigatório preencher
			Assunto,
			Mensagem,
			VetorArquivos,			=> Array de arquivos a serem anexados
			Formato					=> Não obrigatório e quando não informado o ermail é enviado como text/html
			);
	$V[0] = "d:\\Web\\ImagemLayout\\trf1_bar24inf_anterior_apagado.gif";
	$V[1] = "d:\\Web\\ImagemLayout\\trf1_bar24inf_email.gif";
	Trf1EnviaMail("TRF 1ª Região","USERDESTINO@trf1.gov.br","USERS_COPIA@trf1.gov.br","USERS_OCULTOS@trf1.gov.br","TRF 1ª Região - Assunto",$Men,$V,"text");
	Trf1EnviaMail("TRF 1ª Região","USERDESTINO@trf1.gov.br","USERS_COPIA@trf1.gov.br","USERS_OCULTOS@trf1.gov.br","TRF 1ª Região - Assunto",$Men,"","";
	Trf1EnviaMail("TRF 1ª Região","USERDESTINO@trf1.gov.br","USERS_COPIA@trf1.gov.br","USERS_OCULTOS@trf1.gov.br","TRF 1ª Região - Assunto","<font size=4>Este é o Corpo da mensagem</font>","");*/
	# Declaração de variáveis iniciais
	$boundaryMailEnvio =   "-----=".md5(uniqid (rand()));
	$indiceArq=0;
	$Arquiv="";
	$extensaoArquiv="";
	$ArqName = "";
	if($Formato=="text")
		$Formato = "text/plain";
	if(trim($Formato)=="")
		$Formato = "text/html";
	#   Array de extensões válidas para o envio do email  #
	$AttachmentExtensions  = array (
			'jpg'   => 'image/jpeg'    					,'jpeg' => 'image/jpeg',
			'gif'   => 'image/gif'     					, 'png' => 'image/png',
			'bmp'   => 'image/bmp'     					,'pdf' 	=> 'application/pdf',
			'doc'   => 'application/msword'    			,'dot' 	=> 'application/msword',
			'ppt'   => 'application/powerpoint'			,'xls' 	=> 'application/excel',
			'zip'   => 'application/x-zip-compressed'	,'tgz' 	=> 'application/x-gtar',
			'tar'   => 'application/x-tar'
			);
	#  Header da mensagem a ser enviada.
	#  Aqui são colocados os valores dos destinatários da mensagem: Ocultos ou não
	$Corpoheaders="From: $Origem \r\n"
				  . "Reply-To : ".$Origem."\r\n"
				  . "Return-Path : ".$Origem."\r\n"
				  . ($DestinoOcultos==""? "" :"Bcc: $DestinoOcultos \r\n")
				  . ($DestinoCopia ==""? "" :"Cc: $DestinoCopia \r\n")
				  .(@trim($VetorArquivos)!="" ?
				    "X-Priority: 1\r\n"
				  . "X-MSMail-Priority: Normal\r\n"
				  . "X-Mailer: Just My Server\r\n"
				  . "MIME-Version: 1.0\r\n"
				  . "Content-Type: multipart/mixed; boundary=\"".$boundaryMailEnvio."\"\r\n"
				  . "\r\n"
				  : "Content-Type: ".$Formato."\r\n");
	$Corpoheaders1="From: $Origem \r\n"
	 			  . "Return-Path: <pushtrf1@trf1.gov.br>\r\n"
				  . "X-Priority: 1\r\n"
				  . "X-MSMail-Priority: Normal\r\n"
				  . "X-Mailer: Just My Server"
				  . "MIME-Version: 1.0\n"
				  . "Content-Type: multipart/mixed; boundary=\"".$boundaryMailEnvio."\"\n"
				  . ($DestinoOcultos==""? "" :"bcc: $DestinoOcultos \r\n\n")
				  . "\n";

	#  Corpo da mensagem a ser enviada. Pode ser formatado como htm ou txt
	$CorpoMsg = (@trim($VetorArquivos)!="" ?
				"Format MIME 1.0 multipart/mixed.\n"
				."--$boundaryMailEnvio\n"
				."Content-Type: ".$Formato.";\n charset=\"iso-8859-1\"\n"
				."Content-Transfer-Encoding:8bit\n"
				."\n"
				:
				"")
				."\r\n"
				. (trim($Formato)=="text/plain"
						? "\n\r" . $Mensagem
						: "<br>&nbsp;&nbsp;&nbsp;&nbsp;<font size=2 face=verdana> " .$Mensagem
				  )
				."\r\n\n\n";
	#  Anexos da mensagem a ser enviada.
	#  Aqui é montado o trecho da mensagem referente aos anexos
	if(@trim($VetorArquivos)=="")
		$CorpoARQmail="";
	else
		$CorpoARQmail="--$boundaryMailEnvio\n";
	if(@$VetorArquivos!=""){
		while ($indiceArq < count($VetorArquivos)){
			$Arquiv = str_replace(" ","",$VetorArquivos[$indiceArq]);
			$Arquiv = str_replace(" ","",$Arquiv);
			$extensaoArquiv=substr($Arquiv,strlen($Arquiv)-3,strlen($Arquiv));
			//echo "Foi <br>";
			if($indiceArq>0)
				$CorpoARQmail.="--$boundaryMailEnvio\n";
			$arquivoArq=$Arquiv;
			if(file_exists($arquivoArq)){
				$ArqName = substr($arquivoArq,strrpos($arquivoArq,"\\")+1,(strlen($arquivoArq) - strrpos($arquivoArq,"\\")));
				$fpArq=fopen($arquivoArq,"r");
				$Arqattachment=fread($fpArq,filesize($arquivoArq));
				$Arqattachment=chunk_split(base64_encode($Arqattachment));
				fclose($fpArq);
				if (isset($AttachmentExtensions[$extensaoArquiv])){
					$CorpoARQmail.="Content-Type: " ;
					$CorpoARQmail .= $AttachmentExtensions[$extensaoArquiv];
				}
				else{
					$CorpoARQmail .= "Content-Type: image/gif;";
				}
				$CorpoARQmail.="; name=\"".$ArqName."\"\n";
				$CorpoARQmail.="Content-Transfer-Encoding: base64\n";
				$CorpoARQmail.="Content-Disposition: attachment; filename=\"".$ArqName."\"\n";
				$CorpoARQmail.="\n";
				$CorpoARQmail.=$Arqattachment . "\n";
				$CorpoARQmail.="\n\n\n\n";
			}
			$indiceArq++;
			if($indiceArq>10) break;

		}
		$CorpoARQmail.="--$boundaryMailEnvio--\n";
	}
	$CorpoMsg .= $CorpoARQmail;
	//echo "<br><br>\n\n" . $CorpoMsg . "\n\n<br><br>";
	if((trim($Destino)=="")&&(trim($DestinoOcultos)=="")) return false;
	else{
		//if($Destino == "") $Destino = "pushtrf1@trf1.gov.br";
		if($Destino == "") $Destino = "trf1@trf1.gov.br";
		if(@$VetorArquivos==""){
			if($Origem == ""){
				$Origem="From: TRF1 Push <trf1@trf1.gov.br>\nContent-Type: ".$Formato."\nReturn-Path: <pushtrf1@trf1.gov.br>\n\r\n";
			}
			else{
				$Origem = $Corpoheaders;
				//$Origem="From: $Origem\nContent-Type: ".$Formato."\nReturn-Path: $Origem\n\r\n\n";//"<divip@trf1.gov.br>\r\n\n";
			}
			if (@mail($Destino, $Assunto, $CorpoMsg,$Origem)){
				return true;
			}
			else return false;
		}
		else{
			if(@mail($Destino, $Assunto, $CorpoMsg, $Corpoheaders)) return true;
			else return false;
		}
	}
}
function EnviaBoletimTurmas($idPub){
	$SqlBoletim = "
		SELECT
			PUOF_PUBL_OFICIAL.PUOF_COD_PUBL CODIGO,
			PUOF_PUBL_OFICIAL.PUOF_NUM_PUBL NUMERO,
			TO_CHAR(PUOF_PUBL_OFICIAL.PUOF_DT_PUBL,'DD-MM-YYYY') DATA,
			'BOLETIM_INFORMATIVO' AS DESCRICAO,
			PUOF_PUBL_OFICIAL.PUOF_TXT_PUBL DOCUMENTO
		FROM PUOF_PUBL_OFICIAL
		WHERE
			PUOF_COD_PUBL=:idDoc ";

	$cursor = ExecutaQuery($SqlBoletim,"TRF1",":idDoc",$idPub);// OCIParse ($conexao, $SqlBoletim);
	$exe = OCIExecute ($cursor);
	$n_linhas = OCIFetchStatement($cursor,$linha);

	# Declara variáveis necessárias para abrir o arquivo do tipo PDF
	$VarErros = "";
	$CaminhoArquivos 	=	"d:\\logPush\\";

	if($n_linhas>0){
		$IndArqBlob = 0;
		$ArquivoCriado = false;
		for ( $i = 0; $i < $n_linhas; $i++ )
		{
			# Array com o resultado da consulta
			$CODG = $linha["CODIGO"] ;
			$NUM  = $linha["NUMERO"] ;
			$DATA = $linha["DATA"] ;
			$DOC  = $linha["DOCUMENTO"] ;

			$numero		=	$NUM[$i];
			$data		=	$DATA[$i];
			$arquivo	=	$DOC[$i] ;
			$CodDoc		=	$CODG[$i];

			# Declara variáveis necessárias para abrir o arquivo do tipo PDF
			$len = strlen($arquivo) ;
			$VarErros = "";
			$nome = "BIJ_TRF1_" . $numero. "_". $CodDoc . "_" . $data;
			$filename = $CaminhoArquivos . $nome . '.pdf';
			$somecontent = $arquivo;
			# Verica-se primeiro se o arquivo existe e é editável
			if(file_exists($filename))
				@unlink($filename);
			if (!$handle = fopen($filename, 'a+')) {
				 $VarErros = "Não foi possível abrir o arquivo ($filename)";
			}
			else{
				if (!fwrite($handle, $somecontent)) {
				   $VarErros = "Não foi possível escrever no arquivo ($filename)";
				}
				else{
					$ArquivoCriado = true;
					@fclose($handle);
					$VarErros = "Sucesso, arquivo criado($filename)";
				}
			}
			if($ArquivoCriado){
				$TxtMensagem="";
				$TxtMensagem.="\r\n<br>". "&nbsp;&nbsp;&nbsp;&nbsp;<font size=2 face=verdana>Prezado Sr. Usuário, "
						. "\r\n<br><br>"
						. "\r\n &nbsp;&nbsp;&nbsp;&nbsp;Conforme solicitação, estamos enviando-lhe, em anexo, "
						. "o <b>BIJ - Boletim Informativo de Jurisprudência</b>. "
						. "\r\n <br>"
						. "\r\n <br>&nbsp;&nbsp;&nbsp;&nbsp;Se ainda não possuir o <b><i>Acrobat Reader</i></b> instalado em seu computador, necessário para ler documentos PDF, clique no link abaixo: "
						. "\r\n <br><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"http://www.adobe.com.br/products/acrobat/readstep2.html\"><i>"
						. "Acrobat Reader</i></a><br><br>"
						. "\r\n &nbsp;&nbsp;&nbsp;&nbsp;<font size=2 face=verdana>Se já possuir o <i>Acrobat Reader</i> instalado em seu computador e estiver com <b>dificuldade na abertura do Boletim anexo</b>, recomendamos proceder à <b>atualização para a versão mais recente<b> clicando no link indicado acima.</font>"
						. "\r\n"
						. "\r\n <br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b><font size=2 face=verdana>Tribunal Regional Federal da 1ª Região</font></b>"
						. "\r\n <br><br>"
						. "<br>";

				$TxtMensagem	   .= "\n";
				$OrigemMsg 		 	= "TRF 1ª Região - BIJ - Boletim Informativo de Jurisprudência ";
				$AssuntoMensagem 	= "TRF 1ª Região - BIJ - Boletim Informativo de Jurisprudência ";
				$EmailContato    	= "boletim-jurisprudencia@trf1.gov.br";
				$ArrayArqBlob[0] 	= $filename;
				if(!Trf1EnviaMail(
					$OrigemMsg,
					$EmailContato,"","",
					$AssuntoMensagem,
					$TxtMensagem,
					$ArrayArqBlob)
				){
					$EnviadoBole = "Status: Boletim não Enviado !!";
				}
				else{
					$EnviadoBole = "Status: Boletim Enviado !!";
				}
				@unlink($filename);
			}
		}
	}
}
/*
function Trf1EnviaMail1(	$Origem="TRF 1ª Região", $Destino="", $DestinoCopia="",
						$DestinoOcultos="",$Assunto="TRF 1ª Região",$Mensagem="",
						$VetorArquivos="",$Formato="text/html"
						){
	/* Exemplos de chamada #
	Trf1EnviaMail(	Origem,
			Destino(s),    			=> Separar por vírgula os emails - é obrigatório preencher um dos dois(Destino/Destino(s) Oculto)
			Destino(s) Cópia,    	=> Separar por vírgula os emails - Não é obrigatório preencher
			Destino(s) Oculto(s),	=> Separar por vírgula os emails - Não é obrigatório preencher
			Assunto,
			Mensagem,
			VetorArquivos,			=> Array de arquivos a serem anexados
			Formato					=> Não obrigatório e quando não informado o ermail é enviado como text/html
			);
	$V[0] = "d:\\Web\\ImagemLayout\\trf1_bar24inf_anterior_apagado.gif";
	$V[1] = "d:\\Web\\ImagemLayout\\trf1_bar24inf_email.gif";
	Trf1EnviaMail("TRF 1ª Região","USERDESTINO@trf1.gov.br","USERS_COPIA@trf1.gov.br","USERS_OCULTOS@trf1.gov.br","TRF 1ª Região - Assunto",$Men,$V,"text");
	Trf1EnviaMail("TRF 1ª Região","USERDESTINO@trf1.gov.br","USERS_COPIA@trf1.gov.br","USERS_OCULTOS@trf1.gov.br","TRF 1ª Região - Assunto",$Men,"","";
	Trf1EnviaMail("TRF 1ª Região","USERDESTINO@trf1.gov.br","USERS_COPIA@trf1.gov.br","USERS_OCULTOS@trf1.gov.br","TRF 1ª Região - Assunto","<font size=4>Este é o Corpo da mensagem</font>","");*/
	/*
	# Declaração de variáveis iniciais
	$boundaryMailEnvio =   "-----=".md5(uniqid (rand()));
	$indiceArq=0;
	$Arquiv="";
	$extensaoArquiv="";
	$ArqName = "";
	if($Formato=="text")
		$Formato = "text/plain";
	if(trim($Formato)=="")
		$Formato = "text/html";
	#   Array de extensões válidas para o envio do email  #
	$AttachmentExtensions  = array (
			'jpg'   => 'image/jpeg'    					,'jpeg' => 'image/jpeg',
			'gif'   => 'image/gif'     					, 'png' => 'image/png',
			'bmp'   => 'image/bmp'     					,'pdf' 	=> 'application/pdf',
			'doc'   => 'application/msword'    			,'dot' 	=> 'application/msword',
			'ppt'   => 'application/powerpoint'			,'xls' 	=> 'application/excel',
			'zip'   => 'application/x-zip-compressed'	,'tgz' 	=> 'application/x-gtar',
			'tar'   => 'application/x-tar'
			);
	#  Header da mensagem a ser enviada.
	#  Aqui são colocados os valores dos destinatários da mensagem: Ocultos ou não
	$Corpoheaders="From: $Origem \r\n"
				  . "X-Priority: 1\r\n"
				  . "X-MSMail-Priority: Normal\r\n"
				  . "X-Mailer: Just My Server"
				  . "MIME-Version: 1.0\n"
				  . "Content-Type: multipart/mixed; boundary=\"".$boundaryMailEnvio."\"\n"
				  . ($DestinoOcultos==""? "" :"bcc: $DestinoOcultos \r\n\n")
				  . ($DestinoCopia ==""? "" :"cc: $DestinoCopia \r\n\n")
				  . "\n";

	#  Corpo da mensagem a ser enviada. Pode ser formatado como htm ou txt
	$CorpoMsg = (@trim($VetorArquivos)!="" ?
				"Format MIME 1.0 multipart/mixed.\n"
				."--$boundaryMailEnvio\n"
				."Content-Type: ".$Formato.";\n charset=\"iso-8859-1\"\n"
				."Content-Transfer-Encoding:8bit\n"
				."\n"
				:
				"")
				."\r\n"
				. (trim($Formato)=="text/plain"
						? "\n\r" . $Mensagem
						: "<br>&nbsp;&nbsp;&nbsp;&nbsp;<font size=2 face=verdana> " .$Mensagem
				  )
				."\r\n\n\n";
	#  Anexos da mensagem a ser enviada.
	#  Aqui é montado o trecho da mensagem referente aos anexos
	if(@trim($VetorArquivos)=="")
		$CorpoARQmail="";
	else
		$CorpoARQmail="--$boundaryMailEnvio\n";
	if(@$VetorArquivos!=""){
		while ($indiceArq < count($VetorArquivos)){
			$Arquiv = str_replace(" ","",$VetorArquivos[$indiceArq]);
			$Arquiv = str_replace(" ","",$Arquiv);
			$extensaoArquiv=substr($Arquiv,strlen($Arquiv)-3,strlen($Arquiv));
			//echo "Foi <br>";
			if($indiceArq>0)
				$CorpoARQmail.="--$boundaryMailEnvio\n";
			$arquivoArq=$Arquiv;
			if(file_exists($arquivoArq)){
				$ArqName = substr($arquivoArq,strrpos($arquivoArq,"\\")+1,(strlen($arquivoArq) - strrpos($arquivoArq,"\\")));
				$fpArq=fopen($arquivoArq,"r");
				$Arqattachment=fread($fpArq,filesize($arquivoArq));
				$Arqattachment=chunk_split(base64_encode($Arqattachment));
				fclose($fpArq);
				if (isset($AttachmentExtensions[$extensaoArquiv])){
					$CorpoARQmail.="Content-Type: " ;
					$CorpoARQmail .= $AttachmentExtensions[$extensaoArquiv];
				}
				else{
					$CorpoARQmail .= "Content-Type: image/gif;";
				}
				$CorpoARQmail.="; name=\"".$ArqName."\"\n";
				$CorpoARQmail.="Content-Transfer-Encoding: base64\n";
				$CorpoARQmail.="Content-Disposition: attachment; filename=\"".$ArqName."\"\n";
				$CorpoARQmail.="\n";
				$CorpoARQmail.=$Arqattachment . "\n";
				$CorpoARQmail.="\n\n\n\n";
			}
			$indiceArq++;
			if($indiceArq>10) break;
		}
		$CorpoARQmail.="--$boundaryMailEnvio--\n";
	}
	$CorpoMsg .= $CorpoARQmail;
	//echo "<br><br>\n\n" . $CorpoMsg . "\n\n<br><br>";
	if((trim($Destino)=="")&&(trim($DestinoOcultos)=="")) return false;
	else{
		if($Destino == "") $Destino = "pushtrf1@trf1.gov.br";
		if(@$VetorArquivos==""){
			if($Origem == ""){
				$Origem="From: TRF1 Push <pushtrf1@trf1.gov.br>\nContent-Type: ".$Formato."\nReturn-Path: <pushtrf1@trf1.gov.br>\n\r\n";
			}
			else{
				$Origem="From: $Origem\nContent-Type: ".$Formato."\nReturn-Path: $Origem\n\r\n\n";//"<divip@trf1.gov.br>\r\n\n";
			}
			if (mail($Destino, $Assunto, $CorpoMsg,$Origem)){
				return true;
			}
			else return false;
		}
		else{
			if(mail($Destino, $Assunto, $CorpoMsg, $Corpoheaders)) return true;
			else return false;
		}
	}
}*/
function temJEF($SECAO)
{
	$arrayJEF = array("BA" ,"DF"  ,"AC"  ,"AP"  ,"AM"  ,"GO"  ,"MT"  ,"MA"  ,"MG"  ,"PA"  ,"PI"  ,"RO"  ,"RR"  ,"TO"  ,
					 "JFBA","JFDF","JFAC","JFAP","JFAM","JFGO","JFMT","JFMA","JFMG","JFPA","JFPI","JFRO","JFRR","JFTO",
					 "3000","3100","3200","3300","3400","3500","3600","3700","3800","3900","4000","4100","4200","4300");
	if(in_array($SECAO, $arrayJEF)){
		return true;
	}
	else
		return false;
}

function temNUMERACAOUNICA($SECAO)
{
	/*
	$arrayNUMERACAOUNICA = array(
	"AP","JFAP","3100",
	"RR","JFRR","4200",
	"MG","JFMG","3800",
	'JFO','3801',
	'UBE','3802',
	'PSS','3804',	
	
	"BA","JFBA","3300",
	"ILS","ILS","3301",
	"MT","JFMT","3600",
	"PI","JFPI","4000",
	"MA","JFMA","3700",
	"RO","JFRO","4100",
	"AC","JFAC","3000",	
		
	"AM","JFAM","3200",	
	"TB","TBT","3201",
	"UL","UDI","UD","3803",
	"GO","JFGO","3500",
	"ANS","ANS","3502",
	"LZA","LZA","3501",
	"RVD","RVD","3503",
	"ACG","ACG","3504",
	"DF","JFDF","3400",
	"TO","JFTO","4300",
	"PA","JFPA","3900", 
	"MB","MBA","3901" , 
	"ST","STM","3902" ,
	"ATM","ATM","3903",
	"CAH","CAH","3904",
	"TRF1","0100","1000"
	);
	/** /	
	$arrayNUMERACAOUNICA = array(
	"AM","JFAM","3200",	
	"TB","TBT","3201",
	"UL","UDI","UD","3803",
	"GO","JFGO","3500",
	"ANS","ANS","3502",
	"LZA","LZA","3501",
	"RVD","RVD","3503",
	"ACG","ACG","3504",
	"DF","JFDF","3400",
	"TO","JFTO","4300",
	"PA","JFPA","3900", 
	"MB","MBA","3901" , 
	"ST","STM","3902" ,
	"ATM","ATM","3903",
	"CAH","CAH","3904",
	"TRF1","0100","1000"
	);
	if(in_array($SECAO, $arrayNUMERACAOUNICA)){
		return true;
	}
	else
		return false;
	/**/
	return true;
}

function bloqueado($SECAO)
{
	$SECAOBloqueada = array();
	if(in_array($SECAO, $SECAOBloqueada)){
		echo("<br><center><strong>Esta pesquisa está temporariamente desativada para manutenção.</strong></center>");
		return true;
	}
	else
		return false;
}
function trf1_conecta($SECAO)
{
	if (bloqueado($SECAO))
		exit;
	$connectionGene = @OCILogon(Conexao($SECAO,2), Conexao($SECAO,3), Conexao($SECAO,1));
	if ($connectionGene == false)
	{
		$connectionGene = @OCILogon(Conexao($SECAO,6), Conexao($SECAO,7), Conexao($SECAO,1));
		if ($connectionGene == false)
		{
			$connectionGene = @OCILogon(Conexao($SECAO,10), Conexao($SECAO,11), Conexao($SECAO,1));
			if ($connectionGene == false)
			{
				//echo "Este servidor está indisponível no momento. Tente mais tarde.";
				$connectionGeneErrMsg = "";
				$connectionGeneOciErr = OCIError();
				if ($connectionGeneOciErr)
				{
					if ($connectionGeneOciErr["code"] == "1017")
					{
						$ConnectionErrMsg="Usuário ou senha incorretos"."Error ". $connectionGeneOciErr["message"];
						$LogRemocaoArquivo = "Usuário ou senha incorretos \n "
										."Error ". $connectionGeneOciErr["message"]
										."\nBanco:" . Conexao($SECAO,1)
										."\nUsuário:" . Conexao($SECAO,2);
					}
					else
					{
						$LogRemocaoArquivo = "Error ". $connectionGeneOciErr["message"]
										."\nBanco:" . Conexao($SECAO,1)
										."\nUsuário:" . Conexao($SECAO,2);;
						$connectionGeneErrMsg = "Error ". $connectionGeneOciErr["message"];
					}
				}
				//if($LogRemocaoArquivo!=""){
				//	Trf1EnviaMail("TRF 1ª Região<tr224ps@trf1.gov.br>","intranet@trf1.gov.br","","","TRF 1ª Região - Erro Internet",$LogRemocaoArquivo,"","text");
					//Trf1EnviaMail("TRF 1ª Região<tr224ps@trf1.gov.br>","intranet@trf1.gov.br,webmaster@trf1.gov.br","","","TRF 1ª Região - Erro Internet",$LogRemocaoArquivo,"","text");
					$txtmsg2 = "<center><font size=2 color=red><strong>Serviço Indisponível no Momento ![6063]</strong></font><font size=2><br>O erro foi encaminhado ao setor responsável para verificação.<br>Espere alguns instantes e faça uma nova tentativa.<br><!--Caso o problema persista, contate o <a href=\"mailto:webmaster@trf1.gov.br\" class=lk>Webmaster</a>--></font></center>";
					ImprimeBarraInfoAtencao($txtmsg2);
					$MSgMai = "\n\n " . @$connectionGeneErrMsg . " \n\n " . @Conexao($SECAO,10) . " \n\n " . @$query . " \n\n " . @$SECAO . " \n\n";
					//@mail("tr224ps@trf1.gov.br","erro biblioteca [6194] $SECAO",$MSgMai);//echo $query;
				//}
				//echo "<!--".$connectionGeneErrMsg."-->";
				exit;
			}
		}
	}
	return $connectionGene;

}
function trf1_conecta_intra($SECAO)
{
	if (bloqueado($SECAO))
		exit;
	$connectionIn = @OCILogon(Conexao($SECAO,6), Conexao($SECAO,7), Conexao($SECAO,1));
	if ($connectionIn == false)
	{
		$connectionIn = @OCILogon(Conexao($SECAO,2), Conexao($SECAO,3), Conexao($SECAO,1));
		if ($connectionIn == false)
		{
			$connectionIn = @OCILogon(Conexao($SECAO,4), Conexao($SECAO,5), Conexao($SECAO,1));
			if ($connectionIn == false)
			{
				$connectionIn = @OCILogon(Conexao($SECAO,10), Conexao($SECAO,11), Conexao($SECAO,1));
				if ($connectionIn == false)
				{
					//echo "Este servidor está indisponível no momento. Tente mais tarde.";
					$connectionInErrMsg = "";
					$connectionInOciErr = OCIError();
					if ($connectionInOciErr)
					{
						if ($connectionInOciErr["code"] == "1017")
						{
							$connectionInErrMsg="Usuário ou senha incorretos"."Error ". $connectionInOciErr["message"];
							$LogRemocaoArquivo = "Usuário ou senha incorretos \n "
											."Error ". $connectionInOciErr["message"]
											."\nBanco:" . Conexao($SECAO,1)
											."\nUsuário:" . Conexao($SECAO,2);
						}
						else
						{
							$LogRemocaoArquivo = "Error ". $connectionInOciErr["message"]
											."\nBanco:" . Conexao($SECAO,1)
											."\nUsuário:" . Conexao($SECAO,2);;
							$connectionInErrMsg = "Error ". $connectionInOciErr["message"];
						}
					}
					$MSgMai = "\n\n " . @$connectionInErrMsg . " \n\n " . @Conexao($SECAO,6) . " \n\n " . @$SECAO . " \n\n";
					//@mail("tr224ps@trf1.gov.br","erro biblioteca [6242] $SECAO",$MSgMai);//echo $query;
					$txtmsg2 = "<center><font size=2 color=red><strong>Serviço Indisponível no Momento !</strong></font><font size=2><br>O erro foi encaminhado ao setor responsável para verificação.<br>Espere alguns instantes e faça uma nova tentativa.<br><!--Caso o problema persista, contate o <a href=\"mailto:webmaster@trf1.gov.br\" class=lk>Webmaster</a>--></font></center>";
					ImprimeBarraInfoAtencao($txtmsg2);
					exit;
				}
			}
		}
	}
	return $connectionIn;

}

function trf1_desconecta($connectionDesc)
{
	global $SECAO ;
	if($SECAO=="TRF1")
	{
	if(@$connectionDesc)
		@ocilogoff($connectionDesc);

	}

}

function trf1_query($connection,$query,$bindvar1="",$bindval1="",$bindvar2="",$bindval2="",$bindvar3="",$bindval3="",$bindvar4="",$bindval4="",$bindvar5="",$bindval5="",$bindvar6="",$bindval6="")
{
	global $SECAO;
	if (bloqueado($SECAO))
		exit;

	$cursor = @OCIParse ($connection, $query);
	if ($cursor == false)	{
		//echo OCIError($cursor)." Error(L.5396)<BR>";
		$oerr = OCIError();
		$ErrMsg = "";
		if ($oerr) {
			$ErrMsg = "Error " . $oerr["message"];
			//@mail("tr224ps@trf1.gov.br","erro biblioteca[6279] $query",$ErrMsg);
		}

		exit;
	}
	if ($bindvar1 != "")
		 @OCIBindByName($cursor,$bindvar1, &$bindval1, strlen($bindval1) + 1,1);
	if ($bindvar2 != "")
		 @OCIBindByName($cursor,$bindvar2, &$bindval2, strlen($bindval2) + 1,1);
	if ($bindvar3 != "")
		 @OCIBindByName($cursor,$bindvar3, &$bindval3, strlen($bindval3) + 1,1);
	if ($bindvar4 != "")
		 @OCIBindByName($cursor,$bindvar4, &$bindval4, strlen($bindval4) + 1,1);
	if ($bindvar5 != "")
		 @OCIBindByName($cursor,$bindvar5, &$bindval5, strlen($bindval5) + 1,1);
	if ($bindvar6 != "")
		 @OCIBindByName($cursor,$bindvar6, &$bindval6, strlen($bindval6) + 1,1);

	//echo "<!--\r\n".$query."-->\n\r";
	@ocisetprefetch ($cursor,500);

	$result = @OCIExecute ($cursor);
	if ($result == false)	{
		$oerr = @OCIError();
		if ($oerr) {
			$ErrMsg = "Error ". $oerr["message"];
			//echo $ErrMsg ."xxx<BR>";
			echo "<!--\r\n".$query." \n\n $ErrMsg -->\n\r";
		}
		//echo $query;
		exit;
	  }
	 return ($cursor);
}
function ExecutaQuery($query,$SECAO,$bindvar1="",$bindval1="",$bindvar2="",$bindval2="",$bindvar3="",$bindval3="",$bindvar4="",$bindval4="",$bindvar5="",$bindval5="",$bindvar6="",$bindval6="",$bindvar7="",$bindval7="")
{
	if (bloqueado($SECAO))
		exit;

	$UsuLog = Conexao($SECAO,10);
	$connection = @OCILogon(Conexao($SECAO,10), Conexao($SECAO,11), Conexao($SECAO,1));
	if ($connection == false)	{
		$UsuLog = Conexao($SECAO,4);
		$connection = @OCILogon(Conexao($SECAO,4), Conexao($SECAO,5), Conexao($SECAO,1));
		if ($connection == false)	{
			$UsuLog = Conexao($SECAO,10);
			$connection = @OCILogon(Conexao($SECAO,10), Conexao($SECAO,11), Conexao($SECAO,1));
			if ($connection == false)	{
				$UsuLog = Conexao($SECAO,2);
				$connection = @OCILogon(Conexao($SECAO,2), Conexao($SECAO,3), Conexao($SECAO,1));
				if ($connection == false)	{
					$oerr = OCIError();
					if ($oerr) {
					  if ($oerr["code"] == "6343")
						$ErrMsg="";
					  else
						$ErrMsg = "Error ". $oerr["message"] ."[6346]";
					}
					$MSgMai = @$oerr["message"] . "\n\n " . $UsuLog .  " - w2 - \n\n $SECAO - - \n\n " . @$ErrMsg . " \n\n " . @$query . " \n\n secao[ " . @$SECAO . "] \n\n";
					$txtmsg2 = "<center><font size=2 color=red>
					<strong>Serviço Indisponível no Momento ![6825]</strong></font><font size=2>
					<br>O erro foi encaminhado ao setor responsável para verificação.<br>
					Espere alguns instantes e faça uma nova tentativa.<br>
					<!--Caso o problema persista, contate o <a href=\"mailto:webmaster@trf1.gov.br\" class=lk>Webmaster</a> $MSgMai -->
					</font></center>";
					@mail("tr224ps@trf1.gov.br","erro biblioteca[6830] - w2 - $SECAO ",$MSgMai);
					ImprimeBarraInfoAtencao($txtmsg2);
					exit;
				}
			}
		}
	}
	$cursor = OCIParse ($connection, $query);
	if ($cursor == false)	{
	  echo OCIError($cursor)."<BR>";
	  exit;
	 }

	 if ($bindvar1 != "")
		 OCIBindByName($cursor,$bindvar1, &$bindval1, strlen($bindval1) + 1,1);

	 if ($bindvar2 != "")
		 OCIBindByName($cursor,$bindvar2, &$bindval2, strlen($bindval2) + 1,1);

	 if ($bindvar3 != "")
		 OCIBindByName($cursor,$bindvar3, &$bindval3, strlen($bindval3) + 1,1);

	 if ($bindvar4 != "")
		 OCIBindByName($cursor,$bindvar4, &$bindval4, strlen($bindval4) + 1,1);

	 if ($bindvar5 != "")
		 OCIBindByName($cursor,$bindvar5, &$bindval5, strlen($bindval5) + 1,1);

	 if ($bindvar6 != "")
		 OCIBindByName($cursor,$bindvar6, &$bindval6, strlen($bindval6) + 1,1);

	 if ($bindvar7 != "")
		 OCIBindByName($cursor,$bindvar7, &$bindval7, strlen($bindval7) + 1,1);

	$QueryTemp = str_replace(@$bindvar1, @$bindval1,@$query);
	$QueryTemp = str_replace(@$bindvar2, @$bindval2,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar3, @$bindval3,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar4, @$bindval4,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar5, @$bindval5,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar6, @$bindval6,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar7, @$bindval7,@$QueryTemp);
	//echo "\n\n<!--\n\n" . $QueryTemp . "\n\n-->\n\n";

	$result = @OCIExecute ($cursor);
	$ErrMsg = "";
	if ($result == false)	{
		$oerr = OCIError($cursor);
		if ($oerr) {
		  if ($oerr["code"] == "1017")
			$ErrMsg="";
		  else
			$ErrMsg = "Error ". $oerr["message"] ."[6406]";
		}
		$MSgMai = $oerr["message"] . "\n\n " . @$ErrMsg. "\n\n " . $UsuLog .  " \n\n [$SECAO] \n\n " . @$QueryTemp . " \n\n " . @$SECAO . " \n\n";
		echo "\n<center><br><font color=red>Sistema temporariamente em Manutenção[6269] <!-- \n ". @$oerr["message"]." --><BR>\n</center>";
		//@mail("tr224ps@trf1.gov.br","erro biblioteca[6399] $SECAO",$MSgMai);//echo $query;
	  //echo "<!--\n\r" . $query . "\n\r-->";
	  //echo $query."<BR>";
	  //echo OCIError($cursor)."<BR>";
	  exit;
	  }
	  else{
	  	@ocicommit($connection);
	  }
	 @ocilogoff(@$connection);
	 @ocifreestatement(@$result);
	 return ($cursor);
}
function ExecutaQuerySw($query,$SECAO,$bindvar1="",$bindval1="",$bindvar2="",$bindval2="",$bindvar3="",$bindval3="",$bindvar4="",$bindval4="",$bindvar5="",$bindval5="")
{
	if (bloqueado($SECAO))
		exit;

	$UsuLog = Conexao($SECAO,2);
	$connectionSw = @OCILogon(Conexao($SECAO,2), Conexao($SECAO,3), Conexao($SECAO,1));
	if ($connectionSw == false)	{
		$UsuLog = Conexao($SECAO,4);
		$connectionSw = @OCILogon(Conexao($SECAO,4), Conexao($SECAO,5), Conexao($SECAO,1));
		if ($connectionSw == false)	{
			$UsuLog = Conexao($SECAO,10);
			$connectionSw = @OCILogon(Conexao($SECAO,10), Conexao($SECAO,11), Conexao($SECAO,1));
			if ($connectionSw == false)	{
				$UsuLog = Conexao($SECAO,2);
				$connectionSw = @OCILogon(Conexao($SECAO,2), Conexao($SECAO,3), Conexao($SECAO,1));
				if ($connectionSw == false)	{		
					$oerr = OCIError();
					if ($oerr) {
					  if ($oerr["code"] == "1017")
						$ErrMsg="";
					  else
						$ErrMsg = "Error ". $oerr["message"] ."[6449]";
					}
					$txtmsg2 = "<center><font size=2 color=red>
					<strong>Serviço Indisponível no Momento ![6452]</strong></font><font size=2>
					<br>O erro foi encaminhado ao setor responsável para verificação.<br>
					Espere alguns instantes e faça uma nova tentativa.<br>
					<!--Caso o problema persista, contate o <a href=\"mailto:webmaster@trf1.gov.br\" class=lk>Webmaster</a>-->
					</font></center>";
					$MSgMai = @$oerr["message"] . "\n\n " . @$UsuLog .  " \n\n " . @$ErrMsg . " \n\n " . @$query . " \n\n " . @$SECAO . " \n\n";
					//@mail("tr224ps@trf1.gov.br","erro biblioteca[6443] $SECAO ",$MSgMai);
					ImprimeBarraInfoAtencao($txtmsg2);
					exit;	
					
				}
			}					
		}
	}					
	$cursor = OCIParse ($connectionSw, $query);
	if ($cursor == false)	{
	  echo OCIError($cursor)."<BR>";
	  exit; 	}

	 if ($bindvar1 != "")
		 OCIBindByName($cursor,$bindvar1, &$bindval1, strlen($bindval1) + 1,1);

	 if ($bindvar2 != "")
		 OCIBindByName($cursor,$bindvar2, &$bindval2, strlen($bindval2) + 1,1);

	 if ($bindvar3 != "")
		 OCIBindByName($cursor,$bindvar3, &$bindval3, strlen($bindval3) + 1,1);

	 if ($bindvar4 != "")
		 OCIBindByName($cursor,$bindvar4, &$bindval4, strlen($bindval4) + 1,1);

	 if ($bindvar5 != "")
		 OCIBindByName($cursor,$bindvar5, &$bindval5, strlen($bindval5) + 1,1);

	$QueryTemp = str_replace(@$bindvar1, @$bindval1,@$query);
	$QueryTemp = str_replace(@$bindvar2, @$bindval2,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar3, @$bindval3,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar4, @$bindval4,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar5, @$bindval5,@$QueryTemp);

	$result = @OCIExecute ($cursor);
	$ErrMsg = "";
	if ($result == false)	{
		$oerr = OCIError($cursor);
		if ($oerr) {
		  if ($oerr["code"] == "1017")
			$ErrMsg="";
		  else
			$ErrMsg = "Error ". $oerr["message"] ."[6340]";
		}
		echo "\n<center><br><font color=red>Sistema temporariamente em Manutenção[4648]<BR>\n<!--$ErrMsg--></center>";
		$MSgMai = $oerr["message"] . "\n\n " . @$ErrMsg . " \n\n " . @$QueryTemp . " \n\n " . @$SECAO . " \n\n";
		//@mail("tr224ps@trf1.gov.br","erro biblioteca[6489] $SECAO",$MSgMai);//echo $query;
	  //echo "<!--\n\r" . $query . "\n\r-->";
	  //echo $query."<BR>";
	  //echo OCIError($cursor)."<BR>";
	  exit;
	  }
	  else{
	  	@ocicommit($connectionSw);
	  }
	 if (!($connectionSw == false))
	 	@ocilogoff($connectionSw);
	 @ocifreestatement(@$result);
	 return ($cursor);
}
function ExecutaQueryTweb($query,$SECAO,
	$bindvar1=""	,$bindval1=""	,$bindvar2=""	,$bindval2=""	,$bindvar3=""	,$bindval3=""	,$bindvar4=""	,$bindval4=""	,$bindvar5 ="" 	,$bindval5="",
	$bindvar6=""	,$bindval6=""	,$bindvar7=""	,$bindval7=""	,$bindvar8=""	,$bindval8=""	,$bindvar9=""	,$bindval9=""	,$bindvar10=""	,$bindval10="",
	$bindvar11=""	,$bindval11=""	,$bindvar12=""	,$bindval12=""	,$bindvar13=""	,$bindval13=""	,$bindvar14=""	,$bindval14=""	,$bindvar15=""	,$bindval15=""	
){
	if (bloqueado($SECAO)){
		exit;
	}

	/*
	echo "<!--\n\r";
	
	//echo $query."<br>";
	echo Conexao($SECAO,1)."<br>";
	//echo Conexao($SECAO,2)."<br>";
	//echo Conexao($SECAO,3)."<br>";
	//exit();
	echo "\n\r-->";
	*/
	
	$UsuConexa = Conexao($SECAO,4);
	$connectionTweb = @OCILogon(Conexao($SECAO,4), Conexao($SECAO,5), Conexao($SECAO,1));
	if ($connectionTweb == false)	{
		$UsuConexa = Conexao($SECAO,10);
		$connectionTweb = @OCILogon(Conexao($SECAO,10), Conexao($SECAO,11), Conexao($SECAO,1));
		if ($connectionTweb == false)	{
			$UsuConexa = Conexao($SECAO,6);
			$connectionTweb = @OCILogon(Conexao($SECAO,6), Conexao($SECAO,7), Conexao($SECAO,1));
			if ($connectionTweb == false)	{
				$UsuConexa = Conexao($SECAO,2);
				$connectionTweb = @OCILogon(Conexao($SECAO,2), Conexao($SECAO,3), Conexao($SECAO,1));
				if ($connectionTweb == false)	{
					$UsuConexa = Conexao($SECAO,8);
					$connectionTweb = @OCILogon(Conexao($SECAO,8), Conexao($SECAO,9), Conexao($SECAO,1));
					if ($connectionTweb == false)	{
						#######  TEMPORÁRIO
						$connectionTweb = @OCILogon("EPROCS", "usprdpt", Conexao($SECAO,1));
						if ($connectionTweb == false)	{
							$connectionTweb = @OCILogon("EPROCP", "procusr8", Conexao($SECAO,1));
							if ($connectionTweb == false)	{				
								###################				
								$oerr = OCIError();
								if ($oerr) {
								  if ($oerr["code"] == "1017")
									$ErrMsg="";
								  else
									$ErrMsg = "Error ". $oerr["message"] ."[6537][" . $_SERVER['REMOTE_ADDR']."]";
								}
								$txtmsg2 = "<center><font size=2 color=red>
								<strong>Serviço Indisponível no Momento ! [7038 - w2]</strong></font><font size=2>\n
								<br>O erro foi encaminhado ao setor responsável para verificação.<br>\n
								Espere alguns instantes e faça uma nova tentativa.<br>\n
								<!-- -->  <!-- $SECAO  $ErrMsg -->
								</font></center>\n";
								echo "<br><br>";
								ImprimeBarraInfoAtencao($txtmsg2);
								$MSgMai = @$oerr["message"] . "\n\n [" . @$UsuConexa . "]". @$ErrMsg . " \n\n " . @$SECAO . " -- \n\n" . @$query . " \n\n";
								//@mail("tr224ps@trf1.gov.br","erro biblioteca [" . @$UsuConexa . "][6548] $SECAO ",$MSgMai);//echo $query;
								exit;
							}
						}
					}
				}
			}
		}
	}
	//echo "<!--\n\r" . $UsuConexa ."\n\r-->";
	$cursor = @OCIParse ($connectionTweb, $query);
	if ($cursor == false)	{
		$oerr = ocierror($cursor);
		if ($oerr) {
			$ErrMsg = "Erro: ". $oerr["message"];
			//echo $ErrMsg ."<BR>";
		}
		$txtmsg2 = "<center><font size=2 color=red>
		<strong>Serviço Indisponível no Momento ! [6405]</strong></font><font size=2>\n
		<br>O erro foi encaminhado ao setor responsável para verificação.<br>\n
		Espere alguns instantes e faça uma nova tentativa.<br>\n<!-- $ErrMsg-->
		<!--Caso o problema persista, contate o <a href=\"mailto:webmaster@trf1.gov.br\" class=lk>Webmaster</a>-->
		</font></center>\n";
		echo "<br><br>";
		ImprimeBarraInfoAtencao($txtmsg2);
		$MSgMai = $oerr["message"] . "\n\n [" . @$UsuConexa . "]" . @$ErrMsg . " \n\n " . @$SECAO . " -- \n\n" . @$query . " \n\n";
		//@mail("tr224ps@trf1.gov.br","erro biblioteca [" . @$UsuConexa . "][6571] $SECAO ",$MSgMai);//echo $query;
		exit;
	}

	 if ($bindvar1 != "")
		 @OCIBindByName($cursor,$bindvar1, &$bindval1, strlen($bindval1) + 1,1);

	 if ($bindvar2 != "")
		 @OCIBindByName($cursor,$bindvar2, &$bindval2, strlen($bindval2) + 1,1);

	 if ($bindvar3 != "")
		 @OCIBindByName($cursor,$bindvar3, &$bindval3, strlen($bindval3) + 1,1);

	 if ($bindvar4 != "")
		 @OCIBindByName($cursor,$bindvar4, &$bindval4, strlen($bindval4) + 1,1);

	 if ($bindvar5 != "")
		 @OCIBindByName($cursor,$bindvar5, &$bindval5, strlen($bindval5) + 1,1);
		 
	 if ($bindvar6 != "")
		 @OCIBindByName($cursor,$bindvar6, &$bindval6, strlen($bindval6) + 1,1);

	 if ($bindvar7 != "")
		 @OCIBindByName($cursor,$bindvar7, &$bindval7, strlen($bindval7) + 1,1);

	 if ($bindvar8 != "")
		 @OCIBindByName($cursor,$bindvar8, &$bindval8, strlen($bindval8) + 1,1);

	 if ($bindvar9 != "")
		 @OCIBindByName($cursor,$bindvar9, &$bindval9, strlen($bindval9) + 1,1);

	 if ($bindvar10 != "")
		 @OCIBindByName($cursor,$bindvar10, &$bindval10, strlen($bindval10) + 1,1);
		 
	 if ($bindvar11 != "")
		 @OCIBindByName($cursor,$bindvar11, &$bindval11, strlen($bindval11) + 1,1);
		 
	 if ($bindvar12 != "")
		 @OCIBindByName($cursor,$bindvar12, &$bindval12, strlen($bindval12) + 1,1);
		 
	 if ($bindvar13 != "")
		 @OCIBindByName($cursor,$bindvar13, &$bindval13, strlen($bindval13) + 1,1);
		 
	 if ($bindvar14 != "")
		 @OCIBindByName($cursor,$bindvar14, &$bindval14, strlen($bindval14) + 1,1);

	 if ($bindvar15 != "")
		 @OCIBindByName($cursor,$bindvar15, &$bindval15, strlen($bindval15) + 1,1);		 
		 

	$QueryTemp = str_replace(@$bindvar1, @$bindval1,@$query);
	$QueryTemp = str_replace(@$bindvar2, @$bindval2,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar3, @$bindval3,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar4, @$bindval4,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar5, @$bindval5,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar6, @$bindval6,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar7, @$bindval7,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar8, @$bindval8,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar9, @$bindval9,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar10, @$bindval10,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar11, @$bindval11,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar12, @$bindval12,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar13, @$bindval13,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar14, @$bindval14,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar15, @$bindval15,@$QueryTemp);

	//echo "<!--\n\r" . $QueryTemp . "\n\r-->";
	$result = @OCIExecute ($cursor);
	if ($result == false)	{
		$oerr = OCIError($cursor);
		if ($oerr) {
		  if ($oerr["code"] == "1017")
			$ErrMsg="";
		  else
			$ErrMsg = "Error ". $oerr["message"] ."[6501-]";
		}
		echo "<CENTER><BR><BR><font color=red>Sistema temporariamente em Manutenção [6943.]<BR>"
		."<!-- " . $oerr["message"] . "\n\n " . @$ErrMsg . " \n\r \n\r @$QueryTemp -- @$SECAO --></CENTER>";
		$MSgMai = $oerr["message"] . "\n\n " . @$ErrMsg . " \n\n " . @$QueryTemp . " \n\n " . @$SECAO . " \n\n";
		//@mail("tr224ps@trf1.gov.br","erro biblioteca [6943] $SECAO $UsuConexa",$MSgMai);//echo $query;
		//echo "<!--\n\r" . $UsuConexa ." - " . $SECAO ." - " . $query . "\n\r-->";
	  //echo "<!--\n $ErrMsg \n \n $SECAO \n \n $query \n -->";
	  //echo OCIError($cursor)."<BR>";
	  exit;
    }
	//if(@$connectionTweb){
	  	@ocicommit($connectionTweb);
		@ocilogoff($connectionTweb);
	//}
	return ($cursor);
}
function ExecutaQueryIntraWeb($query,$SECAO,$bindvar1="",$bindval1="",$bindvar2="",$bindval2="",$bindvar3="",$bindval3="",$bindvar4="",$bindval4="",$bindvar5="",$bindval5="")
{
	if (bloqueado($SECAO))
		exit;

	//echo "<!--\n\r" . $query . "\n\r-->";

	//echo $query."<br>";
	//echo "<!-- " . Conexao($SECAO,6)."--><br>";
	/*echo Conexao($SECAO,2)."<br>";
	echo Conexao($SECAO,3)."<br>";
	//exit();
	*/
	$UsuConexa = Conexao($SECAO,4);
	$connectionIntra = @OCILogon(Conexao($SECAO,4), Conexao($SECAO,5), Conexao($SECAO,1));
	if ($connectionIntra == false)	{
		$UsuConexa = Conexao($SECAO,6);
		$connectionIntra = @OCILogon(Conexao($SECAO,6), Conexao($SECAO,7), Conexao($SECAO,1));
		if ($connectionIntra == false)	{
			$UsuConexa = Conexao($SECAO,2);
			$connectionIntra = @OCILogon(Conexao($SECAO,2), Conexao($SECAO,3), Conexao($SECAO,1));
			if ($connectionIntra == false)	{
				$UsuConexa = Conexao($SECAO,10);
				$connectionIntra = @OCILogon(Conexao($SECAO,10), Conexao($SECAO,11), Conexao($SECAO,1));
				if ($connectionIntra == false)	{
					$oerr = OCIError();
					if ($oerr) {
					  if ($oerr["code"] == "1017")
						$ErrMsg="";
					  else
						$ErrMsg = "Error ". $oerr["message"] ."[6665][" . $_SERVER['REMOTE_ADDR']."]";
					}
					//echo "<font color=red>Sistema temporariamente em Manutenção[5764]<BR><!--\n $ErrMsg \n-->";
					//echo "<!--\n\r" . Conexao($SECAO,4) ." - ". Conexao($SECAO,1) ." - " . $query . "\n\r-->";
					$txtmsg2 = "<center><font size=2 color=red>
					<strong>Serviço Indisponível no Momento ! [6494]</strong></font><font size=2>\n
					<br>O erro foi encaminhado ao setor responsável para verificação.<br>\n
					Espere alguns instantes e faça uma nova tentativa.<br>\n<!--$SECAO -- $ErrMsg-->
					<!--Caso o problema persista, contate o <a href=\"mailto:webmaster@trf1.gov.br\" class=lk>Webmaster</a>-->
					</font></center>\n";
	
					$MSgMai = @$oerr["message"] . "\n\n " . @$ErrMsg . "\n\n" . @$UsuConexa ." \n\n" . @$query . " \n\n";
					//@mail("tr224ps@trf1.gov.br","erro biblioteca [6665] $SECAO ",$MSgMai);//echo $query;
	
					echo "<br><br>";
					ImprimeBarraInfoAtencao($txtmsg2);
					exit;
				}
			}
		}
	}
	$cursor = @OCIParse ($connectionIntra, $query);
	if ($cursor == false)	{
		$oerr = ocierror($cursor);
		if ($oerr) {
			$ErrMsg = "Erro: ". $oerr["message"];
			//echo $ErrMsg ."<BR>";
		}
		$txtmsg2 = "<center><font size=2 color=red>
		<strong>Serviço Indisponível no Momento ! [6516]</strong></font><font size=2>\n
		<br>O erro foi encaminhado ao setor responsável para verificação.<br>\n
		Espere alguns instantes e faça uma nova tentativa.<br>\n<!--$SECAO -- $ErrMsg-->
		<!--Caso o problema persista, contate o <a href=\"mailto:webmaster@trf1.gov.br\" class=lk>Webmaster</a>-->
		</font></center>\n";
		echo "<br><br>";
		$MSgMai = @$oerr["message"] . "\n\n $query \n [" . @Conexao($SECAO,6) . "]". @$ErrMsg . " \n\n " . @$SECAO . " -- \n\n" . @$query . " \n\n";
		//@mail("tr224ps@trf1.gov.br","erro biblioteca [6689] $SECAO ",$MSgMai);//echo $query;

		ImprimeBarraInfoAtencao($txtmsg2);
		exit;
	}
	//echo "\n\n<!--\n\n $UsuConexa \n\n-->\n";
	
	 if ($bindvar1 != "")
		 OCIBindByName($cursor,$bindvar1, &$bindval1, strlen($bindval1) + 1,1);

	 if ($bindvar2 != "")
		 OCIBindByName($cursor,$bindvar2, &$bindval2, strlen($bindval2) + 1,1);

	 if ($bindvar3 != "")
		 OCIBindByName($cursor,$bindvar3, &$bindval3, strlen($bindval3) + 1,1);

	 if ($bindvar4 != "")
		 OCIBindByName($cursor,$bindvar4, &$bindval4, strlen($bindval4) + 1,1);

	 if ($bindvar5 != "")
		 OCIBindByName($cursor,$bindvar5, &$bindval5, strlen($bindval5) + 1,1);

	$QueryTemp = str_replace(@$bindvar1, @$bindval1,@$query);
	$QueryTemp = str_replace(@$bindvar2, @$bindval2,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar3, @$bindval3,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar4, @$bindval4,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar5, @$bindval5,@$QueryTemp);
	//echo "<!--\n\r" . $QueryTemp . "\n\r-->";

	$result = @OCIExecute ($cursor);
	if ($result == false)	{
		$oerr = OCIError($cursor);
		if ($oerr) {
		  if ($oerr["code"] == "1017")
			$ErrMsg="";
		  else
			$ErrMsg = "Error ". $oerr["message"] ."[6724]";
		}
		echo "<CENTER><BR><BR><font color=red>Sistema temporariamente em Manutenção [6616]<!-- " . Conexao($SECAO,6) . " \n\n " . $oerr["message"] . "\n\n " . @$QueryTemp . "\n\n" . @$ErrMsg . "\n\n @$SECAO --><BR></CENTER>";
		$MSgMai = $oerr["message"] . "\n\n " . @$ErrMsg . " \n\n " . @$UsuConexa . " \n\n " . @$QueryTemp . " \n\n " . @$SECAO . " \n\n";
		//@mail("tr224ps@trf1.gov.br","erro biblioteca [6728] $SECAO",$MSgMai);//echo $query;
		//echo "<!--\n\r" . Conexao($SECAO,4) ." - " . $SECAO ." - " . $query . "\n\r-->";
	  //echo "<!--\n $ErrMsg \n \n $SECAO \n \n $query \n -->";
	  //echo OCIError($cursor)."<BR>";
	  exit;
    }
	if(@$connectionIntra){
	  	@ocicommit($connectionIntra);
		@ocilogoff($connectionIntra);
	}
	return ($cursor);
}
function ExecutaQueryUsrWeb($query,$SECAO,$bindvar1="",$bindval1="",$bindvar2="",$bindval2="",$bindvar3="",$bindval3="",$bindvar4="",$bindval4="")
{
	if (bloqueado($SECAO))
		exit;

	//echo "<!--\n\r" . $query . "\n\r-->";
	/*
	echo $query."<br>";
	echo Conexao($SECAO,1)."<br>";
	echo Conexao($SECAO,2)."<br>";
	echo Conexao($SECAO,3)."<br>";
	//exit();
	*/
	$UsuConexa = Conexao($SECAO,4);
	$connectionUsr = @OCILogon(Conexao($SECAO,4), Conexao($SECAO,5), Conexao($SECAO,1));
	if ($connectionUsr == false)	{
		$UsuConexa = Conexao($SECAO,2);
		$connectionUsr = @OCILogon(Conexao($SECAO,2), Conexao($SECAO,3), Conexao($SECAO,1));
		if ($connectionUsr == false)	{
			$UsuConexa = Conexao($SECAO,6);
			$connectionUsr = @OCILogon(Conexao($SECAO,6), Conexao($SECAO,7), Conexao($SECAO,1));
			if ($connectionUsr == false)	{
				$UsuConexa = Conexao($SECAO,10);
				$connectionUsr = @OCILogon(Conexao($SECAO,10), Conexao($SECAO,11), Conexao($SECAO,1));
				if ($connectionUsr == false)	{	
					//echo OCIError($connectionUsr)."VVV<BR>";
					$oerr = OCIError();
					if ($oerr) {
					  if ($oerr["code"] == "1017")
						$ErrMsg="";
					  else
						$ErrMsg = "Error ". $oerr["message"] ."[6771][" . $_SERVER['REMOTE_ADDR']."]";
					}
					//echo "<font color=red>Sistema temporariamente em Manutenção[5764]<BR><!--\n $ErrMsg \n-->";
					//echo "<!--\n\r" . Conexao($SECAO,4) ." - ". Conexao($SECAO,1) ." - " . $query . "\n\r-->";
					$txtmsg2 = "<center><font size=2 color=red>
					<strong>Serviço Indisponível no Momento ! [5623]</strong></font><font size=2>\n
					<br>O erro foi encaminhado ao setor responsável para verificação.<br>\n
					Espere alguns instantes e faça uma nova tentativa.<br>\n
					<!--Caso o problema persista, contate o <a href=\"mailto:webmaster@trf1.gov.br\" class=lk>Webmaster</a>-->
					</font></center>\n";
					echo "<br><br>";
					$MSgMai = "\n\n " . @$ErrMsg . " \n\n " . @$UsuConexa . " \n\n " . @$SECAO . " \n\n";
					//@mail("tr224ps@trf1.gov.br","erro biblioteca [6783] $SECAO",$MSgMai);//echo $query;
					ImprimeBarraInfoAtencao($txtmsg2);
					exit;
				}
			}
		}
	}
	$cursor = @OCIParse ($connectionUsr, $query);
	if ($cursor == false)	{
		$oerr = ocierror($cursor);
		if ($oerr) {
			$ErrMsg = "Erro: ". $oerr["message"];
			//echo $ErrMsg ."<BR>";
		}
		$txtmsg2 = "<center><font size=2 color=red>
		<strong>Serviço Indisponível no Momento ! [5640]</strong></font><font size=2>\n
		<br>O erro foi encaminhado ao setor responsável para verificação.<br>\n
		Espere alguns instantes e faça uma nova tentativa.<br>\n<!--$SECAO -- $ErrMsg-->
		<!--Caso o problema persista, contate o <a href=\"mailto:webmaster@trf1.gov.br\" class=lk>Webmaster</a>-->
		</font></center>\n";
		echo "<br><br>";
		$MSgMai = "\n\n " . @$ErrMsg . " \n\n " . @Conexao($SECAO,4) . " \n\n " . @$SECAO . " \n\n";
		//@mail("tr224ps@trf1.gov.br","erro biblioteca [6805] $SECAO",$MSgMai);//echo $
		ImprimeBarraInfoAtencao($txtmsg2);
		exit;
	}

	 if ($bindvar1 != "")
		 OCIBindByName($cursor,$bindvar1, &$bindval1, strlen($bindval1) + 1,1);

	 if ($bindvar2 != "")
		 OCIBindByName($cursor,$bindvar2, &$bindval2, strlen($bindval2) + 1,1);

	 if ($bindvar3 != "")
		 OCIBindByName($cursor,$bindvar3, &$bindval3, strlen($bindval3) + 1,1);

	 if ($bindvar4 != "")
		 OCIBindByName($cursor,$bindvar4, &$bindval4, strlen($bindval4) + 1,1);

	$QueryTemp = str_replace(@$bindvar1, @$bindval1,@$query);
	$QueryTemp = str_replace(@$bindvar2, @$bindval2,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar3, @$bindval3,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar4, @$bindval4,@$QueryTemp);

	$result = @OCIExecute ($cursor);
	if ($result == false)	{
		$oerr = OCIError($cursor);
		if ($oerr) {
		  if ($oerr["code"] == "1017")
			$ErrMsg="";
		  else
			$ErrMsg = "Error ". $oerr["message"] ."[6834]";
		}
		echo "<CENTER><BR><BR><font color=red>Sistema temporariamente em Manutenção [6714]<BR></CENTER>";
		$MSgMai = $oerr["message"] . "\n\n " . @$ErrMsg . " \n\n " . Conexao($SECAO,6) . " \n\n " . @$QueryTemp . " \n\n " . @$SECAO . " \n\n";
		//@mail("tr224ps@trf1.gov.br","erro biblioteca [6838] $SECAO",$MSgMai);//echo $query;
		//echo "<!--\n\r" . Conexao($SECAO,4) ." - " . $SECAO ." - " . $query . "\n\r-->";
	  //echo "<!--\n $ErrMsg \n \n $SECAO \n \n $query \n -->";
	  //echo OCIError($cursor)."<BR>";
	  exit;
    }
	//echo "<!-- " . Conexao($SECAO,4) . "\n\n " . @$QueryTemp . "\n\n @$SECAO -->";
	if(@$connectionUsr){
	  	@ocicommit($connectionUsr);
		@ocilogoff($connectionUsr);
	}
	return ($cursor);
}
function ExecutaQueryUsr($query,$SECAO,$bindvar1="",$bindval1="",$bindvar2="",$bindval2="",$bindvar3="",$bindval3="",$bindvar4="",$bindval4="")
{
	if (bloqueado($SECAO))
		exit;

	//echo "<!--\n\r" . $query . "\n\r-->";
	/*
	echo $query."<br>";
	echo Conexao($SECAO,1)."<br>";
	echo Conexao($SECAO,2)."<br>";
	echo Conexao($SECAO,3)."<br>";
	//exit();
	*/

	$UsuConexa = Conexao($SECAO,4);
	$connectionU = @OCILogon(Conexao($SECAO,4), Conexao($SECAO,5), Conexao($SECAO,1));
	if ($connectionU == false)	{
		$UsuConexa = Conexao($SECAO,2);
		$connectionU = @OCILogon(Conexao($SECAO,2), Conexao($SECAO,3), Conexao($SECAO,1));
		if ($connectionU == false)	{
			$UsuConexa = Conexao($SECAO,6);
			$connectionU = @OCILogon(Conexao($SECAO,6), Conexao($SECAO,7), Conexao($SECAO,1));
			if ($connectionU == false)	{
				$UsuConexa = Conexao($SECAO,10);
				$connectionU = @OCILogon(Conexao($SECAO,10), Conexao($SECAO,11), Conexao($SECAO,1));
				if ($connectionU == false)	{	
					//echo OCIError($connectionU)."VVV<BR>";
					$oerr = OCIError();
					if ($oerr) {
					  if ($oerr["code"] == "1017")
						$ErrMsg="";
					  else
						$ErrMsg = "Error ". $oerr["message"] ."[6883]";
					}
					$txtmsg2 = "<center><font size=2 color=red>
					<strong>Serviço Indisponível no Momento ! [5623]</strong></font><font size=2>\n
					<br>O erro foi encaminhado ao setor responsável para verificação.<br>\n
					Espere alguns instantes e faça uma nova tentativa.<br>\n<!--$SECAO -- $ErrMsg-->
					<!--Caso o problema persista, contate o <a href=\"mailto:webmaster@trf1.gov.br\" class=lk>Webmaster</a>-->
					</font></center>\n";
					echo "<br><br>";
					$MSgMai = $oerr["message"] . "\n\n " . @$ErrMsg . " \n\n " . $UsuConexa . " \n\n " . @$query . " \n\n " . @$SECAO . " \n\n";
					//@mail("tr224ps@trf1.gov.br","erro biblioteca [6893] $SECAO",$MSgMai);//echo $query;
					ImprimeBarraInfoAtencao($txtmsg2);
					exit;
				}
			}
		}
	}
	$cursor = @OCIParse ($connectionU, $query);
	if ($cursor == false)	{
		$oerr = ocierror($cursor);
		if ($oerr) {
			$ErrMsg = "Erro: ". $oerr["message"];
			//echo $ErrMsg ."<BR>";
		}
		$txtmsg2 = "<center><font size=2 color=red>
		<strong>Serviço Indisponível no Momento ! [5640]</strong></font><font size=2>\n
		<br>O erro foi encaminhado ao setor responsável para verificação.<br>\n
		Espere alguns instantes e faça uma nova tentativa.<br>\n<!--$SECAO -- $ErrMsg-->
		<!--Caso o problema persista, contate o <a href=\"mailto:webmaster@trf1.gov.br\" class=lk>Webmaster</a>-->
		</font></center>\n";
		echo "<br><br>";
		$MSgMai = $oerr["message"] . "\n\n " . @$ErrMsg . " \n\n " . @$query . " \n\n " . @$SECAO . " \n\n";
		//@mail("tr224ps@trf1.gov.br","erro biblioteca [6915] $SECAO",$MSgMai);//echo $query;
		ImprimeBarraInfoAtencao($txtmsg2);
		exit;
	}

	 if ($bindvar1 != "")
		 OCIBindByName($cursor,$bindvar1, &$bindval1, strlen($bindval1) + 1,1);

	 if ($bindvar2 != "")
		 OCIBindByName($cursor,$bindvar2, &$bindval2, strlen($bindval2) + 1,1);

	 if ($bindvar3 != "")
		 OCIBindByName($cursor,$bindvar3, &$bindval3, strlen($bindval3) + 1,1);

	 if ($bindvar4 != "")
		 OCIBindByName($cursor,$bindvar4, &$bindval4, strlen($bindval4) + 1,1);

	$QueryTemp = str_replace(@$bindvar1, @$bindval1,@$query);
	$QueryTemp = str_replace(@$bindvar2, @$bindval2,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar3, @$bindval3,@$QueryTemp);
	$QueryTemp = str_replace(@$bindvar4, @$bindval4,@$QueryTemp);

	$result = @OCIExecute ($cursor);
	if ($result == false)	{
		$oerr = OCIError($cursor);
		if ($oerr) {
		  if ($oerr["code"] == "1017")
			$ErrMsg="";
		  else
			$ErrMsg = "Error ". $oerr["message"] ."[6944]";
		}
		echo "<CENTER><BR><BR><font color=red>Sistema temporariamente em Manutenção [6814]<!-- " . Conexao($SECAO,6) . " \n\n " . $oerr["message"] . "\n\n " . @$QueryTemp . "\n\n" . @$ErrMsg . "\n\n @$SECAO --><BR></CENTER>";
		$MSgMai = $oerr["message"] . "\n\n " . @$ErrMsg . " \n\n " . Conexao($SECAO,6) . " \n\n " . @$QueryTemp . " \n\n " . @$SECAO . " \n\n";
		//@mail("tr224ps@trf1.gov.br","erro biblioteca [6948] $SECAO",$MSgMai);//echo $query;
		//echo "<!--\n\r" . Conexao($SECAO,4) ." - " . $SECAO ." - " . $query . "\n\r-->";
	  //echo "<!--\n $ErrMsg \n \n $SECAO \n \n $query \n -->";
	  //echo OCIError($cursor)."<BR>";
	  exit;
    }
	//echo "<!-- " . Conexao($SECAO,4) . "\n\n " . @$QueryTemp . "\n\n @$SECAO -->";
	if(@$connectionU){
	  	@ocicommit($connectionU);
		@ocilogoff($connectionU);
	}
	return ($cursor);
}
function RetornaVara($CodVara,$SECAO){
	$DESC_VARA = "";
	if(($SECAO=="1000")||($SECAO=="TRF1")){
		$DESC_VARA = "";
		/*$query = "SELECT VAR_DS_VARA FROM P_VARA PV WHERE PV.VAR_CD_VARA=$CodVara ";
		$cursor = ExecutaQuery($query,$SECAO);
		$nrows = OCIFetchStatement($cursor,$resultado);
		if ( $nrows > 0 ) {
			$VARAS		=		$resultado['VAR_DS_VARA'];
			$DESC_VARA	=		$VARAS[0];
		}
		*/
	}
	else{
		if(trim($CodVara)!=""){
			$NumSecao = "" . @ExemploProc($SECAO,5);
			# Retorna as partes prncipais do Processo JEF
			$query = "SELECT VAR_DS_VARA FROM P_VARA PV WHERE PV.VAR_CD_VARA = :CodVara  " . ( $NumSecao != "" ? " and VAR_SESU_CD_SECSUBSEC = :NumSecao " : "" );
			if($NumSecao != "")
				$cursor = ExecutaQuery($query,$SECAO,":CodVara",$CodVara,":NumSecao",$NumSecao);
			else
				$cursor = ExecutaQuery($query,$SECAO,":CodVara",$CodVara);
			$nrows = OCIFetchStatement($cursor,$resultado);
			if ( $nrows > 0 ) {
				$VARAS		=		$resultado['VAR_DS_VARA'];
				$DESC_VARA	=		$VARAS[0];
			}
		}
	}
	if($DESC_VARA!="")
		$DESC_VARA = "VARA&nbsp;PREVENTA:&nbsp;" . $DESC_VARA;
	return $DESC_VARA;
	@ocifreestatement($cursor);
}
function RetornaPartesrincipais($PROC,$SECAO){
	if(($SECAO=="1000")||($SECAO=="TRF1")){
		# Retorna as partes prncipais do Processo TRF
		$query4=""
		."DECLARE \n"
		."	TYPE PHP_CURSOR IS REF CURSOR;   \n"
		."	PROC_ENTRADA NUMBER;   \n"
		."	TXTSAIDA VARCHAR2(4000);    \n"
		."	RETORNO_DATA PHP_CURSOR  ;     \n"
		."	TYPE RECORD_T IS RECORD (   \n"
		."		PROC_COD      NUMBER,   \n"
		."		PROC_UF       VARCHAR2(2),   \n"
		."		GRUPO_DESC    VARCHAR2(50),    \n"
		."		JCONV_NOME    VARCHAR2(250),    \n"
		."		PARTE         VARCHAR2(4000),    \n"
		."		PARTE_CPF     NUMBER  \n"
		."	);   \n"
		."L_RECORD  RECORD_T;   \n"
		."	 \n"
		."BEGIN   \n"
		."	TXTSAIDA := '';   \n"
		."	PROC_ENTRADA := ".$PROC.";   \n"
		."	PCK_JURIS_SIGET.TB_PARTES_PROCESSO(PROC_ENTRADA,RETORNO_DATA,': ');    \n"
		."	LOOP   \n"
		."		FETCH RETORNO_DATA INTO L_RECORD;   \n"
		."		EXIT WHEN RETORNO_DATA%NOTFOUND;   \n"
		."		IF LENGTH(TXTSAIDA)>0 THEN "
		."			TXTSAIDA := TXTSAIDA || '#';"
		."		END IF;"
		."		TXTSAIDA := TXTSAIDA || TRIM(L_RECORD.PARTE);   \n"
		."	END LOOP;   \n"
		."  :TXTSAIDA := TXTSAIDA; \n"
		."	CLOSE RETORNO_DATA; \n"
		."EXCEPTION \n"
		."WHEN OTHERS THEN \n"
		."  dbms_output.put_line('Error '||TO_CHAR(SQLCODE)||': '||SQLERRM); \n"
		."  TXTSAIDA := '';"
		."RAISE; \n"
		."END; \n";
		//echo "<!--\n".$query4."\n-->";
		$TXTSAIDA="";
		$connectionTrf = OCILogon(Conexao($SECAO,2), Conexao($SECAO,3), Conexao($SECAO,1));
		//$connectionTrf = @OCIPLogon(Conexao($SECAO,2), Conexao($SECAO,3), Conexao($SECAO,1));
		if ($connectionTrf == false)	{echo OCIError($connectionTrf)."<BR>";exit;	}
		$cursor = OCIParse ($connectionTrf, $query4);
		if ($cursor == false)	{echo OCIError($cursor)."<BR>";exit; 	}
		OCIBindByName($cursor,":TXTSAIDA", &$TXTSAIDA,32767,1 );
		$result = OCIExecute ($cursor);
		@ocilogoff($connectionTrf);
		@ocifreestatement($cursor);
		$ArrayPartes = explode("#",$TXTSAIDA);
		return $ArrayPartes;
	}
	else{
		if(ProcessoJef($PROC,$SECAO)){
			if(!(temNUMERACAOUNICA($SECAO))){
				$BuscaProcTRF = "
					SELECT
					OCJ_NUMP.NUMP_NR_PROC_RESOL_CNJ PROCCNJ,OCJ_NUMP.NUMP_NR_PROC_TRF PROCTRF
					FROM 
					OCJ_NUMP_NUMERACAO_PROCESSO OCJ_NUMP,
					OCJ_FSPR_FASE_PROCESSO OCJ_FSPR
					WHERE 
					OCJ_NUMP.NUMP_ID=OCJ_FSPR.FSPR_ID_NUMP AND
					(
						(OCJ_NUMP.NUMP_NR_PROC_TRF=:PROC) OR
						(OCJ_NUMP.NUMP_NR_PROC_RESOL_CNJ=:PROC)
					)
				";
				$cursorPA = @ExecutaQuerySw($BuscaProcTRF,$SECAO,":PROC",$PROC);
				$nrowsPA = @OCIFetchStatement($cursorPA,$resultadoPrA);
				if ( $nrowsPA > 0 ) {
					$PROC =	$resultadoPrA['PROCTRF'][0];
				}			
			}
			# Retorna as partes prncipais do Processo JEF
			$query = "SELECT "
			." 'AUTOR: ' || JEF_RETORNA_PARTES_PRINCIPAIS(:PROC,:SECAO,1) || '#'||"
			." 'RÉU: ' || JEF_RETORNA_PARTES_PRINCIPAIS(:PROC,:SECAO,2) AS TXTSAIDA "
			." FROM DUAL";
			$cursor = @ExecutaQuerySw($query,$SECAO,":PROC",$PROC,":SECAO",ExemploProc($SECAO,5));
			$nrows = @OCIFetchStatement($cursor,$resultado);
			if ( $nrows > 0 ) {
				$PARTES		=		$resultado['TXTSAIDA'];
				$TXTSAIDA	=		$PARTES[0];
			}
			else
				$TXTSAIDA = "";
			$ArrayPartes = explode("#",$TXTSAIDA);
			return $ArrayPartes;
		}
		else{
			# Retorna as partes prncipais do Processo de Vara Comum
			$query4=""
			."  DECLARE \n\n"
			."  RETORNO_PARTES    PROCESSUAL.P_PKG_PARTES_PROCESSO.ARRAY_PARTES; \n"
			."  PROC              NUMBER(25); \n"
			
			.( 	temNUMERACAOUNICA($SECAO)
			? "  IDPROCESSO        NUMBER(25); \n"
			: "")
			
			."  TPCHAMADA         NUMBER(1); \n"
			."  TXTSAIDA             VARCHAR2(4000); \n"
			."  BEGIN \n"
			."      TXTSAIDA  := ''; \n"
			."  	PROC 	  := ".$PROC."; \n"
			
			.( 		temNUMERACAOUNICA($SECAO)
			?"  	IDPROCESSO  := PG_NR_UNICA.getidfase(".$PROC."); \n"
			:"")			
			."  	TPCHAMADA := 1; \n"
			."  	PROCESSUAL.P_PKG_PARTES_PROCESSO.RETORNAPARTES \n"
			."  	( \n"
			
			.( 		temNUMERACAOUNICA($SECAO)
			?"		IDPROCESSO,RETORNO_PARTES,TPCHAMADA \n"
			:"  	PROC,RETORNO_PARTES,TPCHAMADA \n")
			
			."  	); \n"
			."  	FOR i in 1..RETORNO_PARTES.COUNT LOOP \n"
			."			IF LENGTH(TXTSAIDA)>0 THEN \n"
			."				TXTSAIDA := TXTSAIDA || '#';\n"
			."			END IF;\n"
			."  		TXTSAIDA := TXTSAIDA || RETORNO_PARTES(i).TIPO || ': ' || RETORNO_PARTES(i).NOME; \n"
			."  	END LOOP;              \n"
			."		:TXTSAIDA := TXTSAIDA; \n"
			."  	END; \n";
			$TXTSAIDA="";
			//echo "<!-- \n\n $query4 \n\n-->";
			//$connectionSec = @OCIPLogon(Conexao($SECAO,2), Conexao($SECAO,3), Conexao($SECAO,1));
			$connectionSec = @OCILogon(Conexao($SECAO,4), Conexao($SECAO,5), Conexao($SECAO,1));
			if ($connectionSec == false)	{
				$connectionSec = @OCILogon(Conexao($SECAO,2), Conexao($SECAO,3), Conexao($SECAO,1));
				if ($connectionSec == false)	{
					$connectionSec = @OCILogon(Conexao($SECAO,6), Conexao($SECAO,7), Conexao($SECAO,1));
					if ($connectionSec == false)	{
						$connectionSec = @OCILogon(Conexao($SECAO,10), Conexao($SECAO,11), Conexao($SECAO,1));
						if ($connectionSec == false)	{
							@mail("tr224ps@trf1.gov.br","Erro Conexao e-Proc [7265] - $SECAO","Erro partes Principais");
							$TXTSAIDA = "ERRO";							
						}
					}
				}
			}
			if($TXTSAIDA != "ERRO"){
				$cursor = @OCIParse ($connectionSec, $query4);
				if ($cursor == false)	{echo OCIError($cursor)."<BR>";exit; 	}
				@OCIBindByName($cursor,":TXTSAIDA", &$TXTSAIDA,32767,1 );
				$result = @OCIExecute ($cursor);
				@ocilogoff($connectionSec);
				@ocifreestatement($cursor);
				$ArrayPartes = explode("#",$TXTSAIDA);
			}
			else{
				$ArrayPartes = "";
			}
			//print_r($ArrayPartes);
			return $ArrayPartes;
		}
	}
	@ocifreestatement($cursor);
}
function formataCPFCGC($codigo)
{
	$retorno=$codigo;
	if ((strlen($codigo)==11)||(strlen($codigo)<11)){
		$codigo = ComplCaracter($codigo,"0",11);
		$retorno=substr($codigo,0,3).".".substr($codigo,3,3).".".substr($codigo,6,3)."-".substr($codigo,9);
	}
	elseif ((strlen($codigo)==14)||(strlen($codigo)>11)){
		$codigo = ComplCaracter($codigo,"0",14);
		$retorno=substr($codigo,0,2).".".substr($codigo,2,3).".".substr($codigo,5,3)."/".substr($codigo,8,4)."-".substr($codigo,12,2);
	}
	elseif ( (trim($codigo)=="")||(strlen($codigo)<7) ){
		$retorno=$codigo;
	}
	return $retorno;
}
function BarraNavegacaoSuperiorRegistrosArray($barra="",$Pos="",$PaginaDestino,$Parametros="",$RegistroPagina="29",$Texto="Registro",$Setas="2")
{
	global $RegistroInicial,$RegistroFinal,$indexArray;
	$S1='S';
	$S2='S';
	if ($RegistroInicial==0) $S1='N';
	//if ($GLOBALS["indexatual"]==29) $S2='N';
	if ($RegistroFinal==$indexArray)
		$S2='N';
	$ImagensBarraRetorno = ($Setas=="2" ? NavegacaoRegistrosArray($barra,'primeiro','Primeiro(a) '.$Texto,$S1,0,$PaginaDestino,$Parametros) : "" )
	.NavegacaoRegistrosArray($barra,'anterior',$Texto .' Anterior',$S1,($GLOBALS["indexArray"]*1)-1,$PaginaDestino,$Parametros)
	.NavegacaoRegistrosArray($barra,'proximo','Próximo(a) '. $Texto,$S2,$GLOBALS["indexArray"]+1,$PaginaDestino,$Parametros)
	.($Setas=="2" ? NavegacaoRegistrosArray($barra,'ultimo','Último(a) '.$Texto,$S2,$RegistroPagina,$PaginaDestino,$Parametros) : "");
	$BarraRetorno = ""
	."<TABLE BORDER=0 width=100% CELLPADDING=0 CELLSPACING=0 align=\"center\">\r\n
		<tr height=24><td width=6 height=24 valign=top><img src=/Layout/trf1_bar24".$barra."_inicio.gif width=\"6\" height=\"24\"></td>\r\n
		<td width=200 background=/Layout/trf1_bar24".$barra.".gif style=\"text-align:left\" align=left  ><font size=1>\r\n
		<a href=\"#\"><img src=\"/Layout/bar24".$barra."impressoranormal.gif\" alt=\"Imprimir esta Página\" width=\"24\" height=\"24\" border=0 onClick=\"window.print();\"> </a>\r\n
		<a href=\"#\"><img src=\"/Layout/bar24".$barra."emailnormal.gif\" alt=\"Enviar esta página para alguém\" width=\"24\" height=\"24\" border=0 onClick=\"envia_email($indexArray);\"></a> \r\n
		</td>\r\n
		<td width=993 background=/Layout/trf1_bar24".$barra.".gif style=\"text-align:right\" align=right><font size=1> \r\n
		$ImagensBarraRetorno
		</td>\r\n
		<td width=11 height=24 valign=top><img src=/Layout/trf1_bar24".$barra."_fim.gif><font size=1>&nbsp;</td>\r\n
		</tr>\r\n
	</table>\r\n";
	return $BarraRetorno;
}

function NavegacaoRegistrosArray($barra,$TextoBotao,$TextoAlt,$Habilitado,$NumeroRegistro,$Pagina="",$Parametros)
{
	global $indexArray, $RegistroFinal;
	if($Pagina=="")
		$Pagina = $_SERVER['PHP_SELF'];
	$Nomebotao = "trf1_bar24$barra"."_";
	if ($Habilitado=='S')
	{
			return "<a href=\"$Pagina?indexArray=$NumeroRegistro&RegistroFinal=$RegistroFinal$Parametros\">\n"
			."<img src=\"/Layout/$Nomebotao$TextoBotao.gif\" border=0 alt=\"$TextoAlt\"></a>\n";
	}
	/*else
		return $Retorno1." 00 - " . $Habilitado . " -" ;*/
}
function ImprimeTextoMensagem($texto)
{
	echo  "<img src=\"/ImagemIcone/iconechecado.gif\"> <font class=titulo3>$texto</font>";
}
?>