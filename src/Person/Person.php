<?php
namespace Packaged\Rwd\Person;

class Person
{
  private $_fullName;

  protected $prefix = [
    'Mr.'         => ['Mr.', 'mr', 'mister', 'master'],
    'Mrs.'        => ['Mrs.', 'mrs', 'missus', 'missis'],
    'Miss.'       => ['Miss.', 'miss'],
    'Ms.'         => ['Ms.', 'ms'],
    'Dr.'         => ['Dr.', 'dr'],
    'Rev.'        => ['Rev.', 'rev', 'rev\'d', 'reverend'],
    'Fr.'         => ['Fr.', 'fr', 'father'],
    'Sr.'         => ['Sr.', 'sr', 'sister'],
    'Prof.'       => ['Prof.', 'prof', 'professor'],
    'Sir'         => ['Sir', 'sir'],
    'Hon.'        => ['Hon.', 'honorable'],
    'Pres.'       => ['Pres.', 'president'],
    'Gov'         => ['Gov', 'governor', 'governer'],
    'Ofc'         => ['Ofc', 'officer'],
    'Msgr'        => ['Msgr', 'monsignor'],
    'Br.'         => ['Br.', 'brother'],
    'Supt.'       => ['Supt.', 'superintendent'],
    'Rep.'        => ['Rep.', 'representatitve'],
    'Sen.'        => ['Sen.', 'senator'],
    'Amb.'        => ['Amb.', 'ambassador'],
    'Treas.'      => ['Treas.', 'treasurer'],
    'Sec.'        => ['Sec.', 'secretary'],
    'Pvt.'        => ['Pvt.', 'private'],
    'Cpl.'        => ['Cpl.', 'corporal'],
    'Sgt.'        => ['Sgt.', 'sargent'],
    'Adm.'        => ['Adm.', 'administrative', 'administrator', 'administrater'],
    'Maj.'        => ['Maj.', 'major'],
    'Capt.'       => ['Capt.', 'captain'],
    'Cmdr.'       => ['Cmdr.', 'commander'],
    'Lt.'         => ['Lt.', 'lieutenant'],
    'Lt. Col.'    => ['Lt. Col.', 'lieutenant colonel'],
    'Col.'        => ['Col.', 'colonel'],
    'Gen.'        => ['Gen.', 'general'],
    'Bc.'         => ['Bc.', 'bachelor', 'baccalaureus'],
    'BcA.'        => ['BcA.', 'bachelor of arts', 'baccalaureus artis'],
    'ICDr.'       => ['ICDr.', 'doctor of canon law', 'juris cononici doctor'],
    'Ing.'        => ['Ing.', 'engineer', 'ingenieur'],
    'Ing. sheet.' => ['Ing. sheet.', 'architect engineer', 'intrudes upon architectus'],
    'JUDr.'       => ['JUDr.', 'juris doctor utriusque', 'doctor rights'],
    'MDDr.'       => ['MDDr.', 'doctor of dental medicine', 'medicinae doctor dentium'],
    'MgA.'        => ['MgA.', 'master of arts', 'magister artis'],
    'Mgr.'        => ['Mgr.', 'master'],
    'MD.'         => ['MD.', 'doctor of general medicine'],
    'DVM.'        => ['DVM.', 'doctor of veterinary medine'],
    'PaedDr.'     => ['PaedDr.', 'doctor of education'],
    'PharmDr.'    => ['PharmDr.', 'doctor of pharmacy'],
    'PhDr.'       => ['PhDr.', 'doctor of philosophy'],
    'PhMr.'       => ['PhMr.', 'master of pharmacy'],
    'RCDr.'       => ['RCDr.', 'doctor of business studies'],
    'RNDr.'       => ['RNDr.', 'doctor of science'],
    'DSc.'        => ['DSc.', 'doctor of science'],
    'RSDr.'       => ['RSDr.', 'doctor of socio-political sciences'],
    'RTDr.'       => ['RTDr.', 'doctor of technical sciences'],
    'ThDr.'       => ['ThDr.', 'doctor of theology'],
    'Th.D.'       => ['Th.D.', 'doctor of theology'],
    'ThLic.'      => ['ThLic.', 'licentiate of theology'],
    'ThMgr.'      => ['ThMgr.', 'master of theology', 'master of divinity'],
    'Acad.'       => ['Acad.', 'academian', 'academic'],
    'ArtD.'       => ['ArtD.', 'doctor of arts'],
    'DiS.'        => ['DiS.', 'certified specialist'],
    'As.'         => ['As.', 'assistant'],
    'Odb. As.'    => ['Odb. As.', 'assistant professor'],
    'Doc.'        => ['Doc.', 'associate professor'],
    ' '           => [' ', 'the'],
  ];
  protected $compound = [
    'da',
    'de',
    'del',
    'della',
    'dem',
    'den',
    'der',
    'di',
    'du',
    'het',
    'la',
    'onder',
    'op',
    'pietro',
    'st.',
    'st',
    '\'t',
    'ten',
    'ter',
    'van',
    'vanden',
    'vere',
    'von',
  ];
  protected $suffixLine = [
    'I',
    'II',
    'III',
    'IV',
    'V',
    '1st',
    '2nd',
    '3rd',
    '4th',
    '5th',
    'Senior',
    'Junior',
    'Jr',
    'Sr',
  ];
  protected $suffixProfession = [
    'AO',
    'B.A.',
    'M.Sc',
    'BCompt',
    'PhD',
    'Ph.D.',
    'APR',
    'RPh',
    'PE',
    'MD',
    'M.D.',
    'MA',
    'DMD',
    'CME',
    'BSc',
    'Bsc',
    'BSc(hons)',
    'Ph.D.',
    'BEng',
    'M.B.A.',
    'MBA',
    'FAICD',
    'CM',
    'OBC',
    'M.B.',
    'ChB',
    'FRCP',
    'FRSC',
    'FREng',
    'Esq',
    'MEng',
    'MSc',
    'J.D.',
    'JD',
    'BGDipBus',
    'Dip',
    'Dipl.Phys',
    'M.H.Sc.',
    'MPA',
    'B.Comm',
    'B.Eng',
    'B.Acc',
    'FSA',
    'PGDM',
    'FCPA',
    'RN',
    'R.N.',
    'MSN',
    'PCA',
    'PCCRM',
    'PCFP',
    'PCGD',
    'PCHR',
    'PCM',
    'PCPS',
    'PCPM',
    'PCSCM',
    'PCSM',
    'PCMM',
    'PCTC',
    'ACA',
    'FCA',
    'ACMA',
    'FCMA',
    'AAIA',
    'FAIA',
    'CCC',
    'MIPA',
    'FIPA',
    'CIA',
    'CFE',
    'CISA',
    'CFAP',
    'QC',
    'Q.C.',
    'M.Tech',
    'CTA',
    'C.I.M.A.',
    'B.Ec',
    'CFIA',
    'ICCP',
    'CPS',
    'CAP-OM',
    'CAPTA',
    'TNAOAP',
    'AFA',
    'AVA',
    'ASA',
    'CAIA',
    'CBA',
    'CVA',
    'ICVS',
    'CIIA',
    'CMU',
    'PFM',
    'PRM',
    'CFP',
    'CWM',
    'CCP',
    'EA',
    'CCMT',
    'CGAP',
    'CDFM',
    'CFO',
    'CGFM',
    'CGAT',
    'CGFO',
    'CMFO',
    'CPFO',
    'CPFA',
    'BMD',
    'BIET',
    'P.Eng',
    'PE',
    'MBBS',
    'MB',
    'BCh',
    'BAO',
    'BMBS',
    'MBBChir',
    'MBChBa',
    'MPhil',
    'LL.D',
    'LLD',
    'D.Lit',
    'DEA',
    'DESS',
    'DClinPsy',
    'DSc',
    'MRes',
    'M.Res',
    'Psy.D',
    'Pharm.D',
    'BA(Admin)',
    'BAcc',
    'BACom',
    'BAdmin',
    'BAE',
    'BAEcon',
    'BA(Ed)',
    'BA(FS)',
    'BAgr',
    'BAH',
    'BAI',
    'BAI(Elect)',
    'BAI(Mech)',
    'BALaw',
    'BAO',
    'BAppSc',
    'BArch',
    'BArchSc',
    'BARelSt',
    'BASc',
    'BASoc',
    'DDS',
    'D.D.S.',
    'BASS',
    'BATheol',
    'BBA',
    'BBLS',
    'BBS',
    'BBus',
    'BChem',
    'BCJ',
    'BCL',
    'BCLD(SocSc)',
    'BClinSci',
    'BCom',
    'BCombSt',
    'BCommEdCommDev',
    'BComp',
    'BComSc',
    'BCoun',
    'BD',
    'BDes',
    'BE',
    'BEcon',
    'BEcon&Fin',
    'M.P.P.M.',
    'MPPM',
    'BEconSci',
    'BEd',
    'BEng',
    'BES',
    'BEng(Tech)',
    'BFA',
    'BFin',
    'BFLS',
    'BFST',
    'BH',
    'BHealthSc',
    'BHSc',
    'BHy',
    'BJur',
    'BL',
    'BLE',
    'BLegSc',
    'BLib',
    'BLing',
    'BLitt',
    'BLittCelt',
    'BLS',
    'BMedSc',
    'BMet',
    'BMid',
    'BMin',
    'BMS',
    'BMSc',
    'BMSc',
    'BMS',
    'BMus',
    'BMusEd',
    'BMusPerf',
    'BN',
    'BNS',
    'BNurs',
    'BOptom',
    'BPA',
    'BPharm',
    'BPhil',
    'TTC',
    'DIP',
    'Tchg',
    'BEd',
    'MEd',
    'ACIB',
    'FCIM',
    'FCIS',
    'FCS',
    'Fcs',
    'Bachelor',
    'O.C.',
    'JP',
    'C.Eng',
    'C.P.A.',
    'B.B.S.',
    'MBE',
    'GBE',
    'KBE',
    'DBE',
    'CBE',
    'OBE',
    'MRICS',
    'D.P.S.K.',
    'D.P.P.J.',
    'DPSK',
    'DPPJ',
    'B.B.A.',
    'GBS',
    'MIGEM',
    'M.I.G.E.M.',
    'FCIS',
    'BPhil(Ed)',
    'BPhys',
    'BPhysio',
    'BPl',
    'BRadiog',
    'BSc',
    'B.Sc',
    'BScAgr',
    'BSc(Dairy)',
    'BSc(DomSc)',
    'BScEc',
    'BScEcon',
    'BSc(Econ)',
    'BSc(Eng)',
    'BScFor',
    'BSc(HealthSc)',
    'BSc(Hort)',
    'BBA',
    'B.B.A.',
    'BSc(MCRM)',
    'BSc(Med)',
    'BSc(Mid)',
    'BSc(Min)',
    'BSc(Psych)',
    'BSc(Tech)',
    'BSD',
    'BSocSc',
    'BSS',
    'BStSu',
    'BTchg',
    'BTCP',
    'BTech',
    'BTechEd',
    'BTh',
    'BTheol',
    'BTS',
    'EdB',
    'LittB',
    'LLB',
    'MA',
    'MusB',
    'ScBTech',
    'CEng',
    'FCA',
    'CFA',
    'Cfa',
    'C.F.A.',
    'LLB',
    'LL.B',
    'LLM',
    'LL.M',
    'CA(SA)',
    'C.A.',
    'CA',
    'CPA',
    'Solicitor',
    'DMS',
    'FIWO',
    'CEnv',
    'MICE',
    'MIWEM',
    'B.Com',
    'BCom',
    'BAcc',
    'BA',
    'BEc',
    'MEc',
    'HDip',
    'B.Bus.',
    'E.S.C.P.',
  ];
  protected $vowels = ['a', 'e', 'i', 'o', 'u'];

  public function __construct($name)
  {
    $this->setFullName($name);
  }

  public function setFullName($name)
  {
    $this->_fullName = $name;
  }

  private function _parse()
  {

  }
}