<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638a7a4a04bf7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Entity; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateTemplate; use Pmpr\Common\Foundation\Manipulate\ManipulateRewrite; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Relation\Manager\PostManager; use WP_Post; use WP_Post_Type; class Post extends Entity { public function __construct() { $this->name = self::mswoacegomcucaik; $this->title = __("\x50\x6f\x73\x74\40\124\171\x70\145\163", PR__MDL__RELATION); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\144\x5f\x6d\145\x74\x61\137\x62\x6f\x78\x65\x73", [$this, "\163\151\x6b\x71\147\147\167\155\155\171\153\x75\151\x79\155\171"]); parent::wigskegsqequoeks(); } public function eyamqkqiykagecsw() : ?string { return IconFontawesomeInterface::gscaisseeekokyea; } public function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, $kiyaqqoyagguscog = false) { $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $ucccueqywigcukcc = "\x5e{$iakkeikwceeomgyq}\57\x28\133\x5e\57\135\x2b\51\57{$muowmkwsoauukiag}\57{$aaokuekaimigoyue}\x2f"; $gqgemcmoicmgaqie = "\151\x6e\144\145\x78\56\x70\x68\160\77\160\157\163\164\x5f\164\171\x70\x65\75{$muowmkwsoauukiag}\x26{$yygmoeguaqyumuui->target}\75{$iakkeikwceeomgyq}\46{$yygmoeguaqyumuui->metakey}\75{$gwiwsycaaqgwmewg}\46{$yygmoeguaqyumuui->side}\75\44\x6d\141\x74\143\x68\x65\163\133\61\x5d"; if (!$kiyaqqoyagguscog) { goto goacqqsgaaigyuaw; } ManipulateRewrite::wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2); goacqqsgaaigyuaw: $ucccueqywigcukcc .= "\x3f\44"; return [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\x74\x6f\x70"]; } public function sikqggwmmykuiymy($useksmwkuswkwcqg) { $mgkceomocowocqyo = $this->weysguygiseoukqw(self::osiogououyayqyck, "\156\x6f\162\x6d\x61\x6c"); if (!($oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $useksmwkuswkwcqg))) { goto mswsoaimesegiiic; } foreach ($oammesyieqmwuwyi as $kooyscwkscsogysg => $gsgwomokyuwmqqkg) { $mksyucucyswaukig = $this->mauewaeoemuusikw($kooyscwkscsogysg); if (!$mksyucucyswaukig) { goto usqgaogkqgemuima; } ManipulateTemplate::sikqggwmmykuiymy([self::gouqcwikiiygyasc => "{$kooyscwkscsogysg}\137\155\145\x74\141\137\142\157\170", self::okeuagwgwkmiokac => [$gsgwomokyuwmqqkg, $kooyscwkscsogysg], self::qgqyauaqwqmqseim => $this->eyamqkqiykagecsw(), self::qescuiwgsyuikume => sprintf(__("\x52\x65\154\x61\x74\x69\x6f\x6e\40\x77\151\164\150\40\x25\163", PR__MDL__RELATION), $mksyucucyswaukig->label), self::cacismqswgaewkuu => $useksmwkuswkwcqg, self::osiogououyayqyck => $mgkceomocowocqyo, self::wwgusigoaksqmwsm => [$this, "\171\163\x79\145\151\151\x79\x71\x73\x65\143\155\x67\157\x79\165"]]); usqgaogkqgemuima: wcesymwqykqoyuqk: } meawswgwagoqgkye: mswsoaimesegiiic: } public function ysyeiiyqsecmgoyu($post, $qookweymeqawmcwo, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { [$gsgwomokyuwmqqkg, $kooyscwkscsogysg] = self::gagauoqcuosakeiq($qookweymeqawmcwo); return parent::ysyeiiyqsecmgoyu($post, $gsgwomokyuwmqqkg, $kooyscwkscsogysg, $koaqeegoeiaiccse); } public static function gagauoqcuosakeiq($qookweymeqawmcwo) { if (!(isset($qookweymeqawmcwo[self::okeuagwgwkmiokac]) && $qookweymeqawmcwo[self::okeuagwgwkmiokac])) { goto egasokooagakisiy; } return $qookweymeqawmcwo[self::okeuagwgwkmiokac]; egasokooagakisiy: self::symcgieuakksimmu()->yiggueaiwiygoiyi(__("\123\x6f\x6d\x65\x74\150\151\156\x67\40\151\163\40\167\x72\157\x6e\147\40\151\x6e\x20\x72\x65\x6c\x61\x74\x69\157\156\40\x66\x69\x65\x6c\x64\40\162\x65\156\x64\145\x72\x69\156\x67", PR__MDL__RELATION), "\x72\x65\x6c\x61\x74\151\157\156", self::imkacwmiuiykyuim); return null; } public function mauewaeoemuusikw($muowmkwsoauukiag) : ?WP_Post_Type { return ManipulatePost::waaisqccqacqeium($muowmkwsoauukiag); } public function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; if (!$mcaisukqqyosuasi instanceof WP_Post) { goto kecwuwwcwokuksyq; } $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); kecwuwwcwokuksyq: return $oammesyieqmwuwyi; } public function goqmcwikekcgyokg() : array { $post = ManipulatePost::get(); $oammesyieqmwuwyi = []; if (!$post instanceof WP_Post) { goto qgegkeomwscwwiuw; } $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $post->post_type); qgegkeomwscwwiuw: return $oammesyieqmwuwyi; } public function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null) { if ($ymqmyyeuycgmigyo instanceof WP_Post || is_numeric($ymqmyyeuycgmigyo)) { goto qmiwsequckckoaei; } $mcaisukqqyosuasi = ManipulatePage::ssacaeeassumyuws($ymqmyyeuycgmigyo, self::ckmqoekmugkggeym, $sqeykgyoooqysmca); goto goeoymmqqqeeoime; qmiwsequckckoaei: $mcaisukqqyosuasi = ManipulatePost::get($ymqmyyeuycgmigyo); goeoymmqqqeeoime: return $mcaisukqqyosuasi; } public function muekkssosomcakme($mcaisukqqyosuasi, $ayegqaqygsqsmews) : array { $mguygkocuoaoqqkg = []; $gwiwsycaaqgwmewg = ManipulateArray::get($ayegqaqygsqsmews, self::moegqsqomeumiomk); if (!$gwiwsycaaqgwmewg) { goto eiawsoasmscmqswa; } $mguygkocuoaoqqkg = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ayegqaqygsqsmews->{self::gygsikewooaciecc}, $gwiwsycaaqgwmewg); eiawsoasmscmqswa: return $mguygkocuoaoqqkg; } public function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi) { $gqgemcmoicmgaqie->set(self::eqomgewoayseioos, $oammesyieqmwuwyi); $gqgemcmoicmgaqie->set(self::gqiasegggowomgie, self::eqomgewoayseioos); return $gqgemcmoicmgaqie; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return PostManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy() : array { $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw([self::aisguagukaewucii => self::eoaiagsgqsmskugs]); return [self::yyuwuqsiucweeoue(self::osiogououyayqyck, __("\115\145\164\141\102\157\x78\40\120\157\163\151\x74\x69\157\156", PR__MDL__RELATION), [self::qayiiikwusguoask => __("\123\x69\x64\145\142\141\162", PR__MDL__RELATION), "\x61\x64\x76\141\x6e\143\145\x64" => __("\x42\x6f\x74\164\x6f\155", PR__MDL__RELATION)], __("\x50\157\163\151\x74\x69\157\x6e\x20\x6f\x66\40\155\x65\164\141\142\x6f\170\40\x69\156\40\145\x64\151\164\40\x73\x63\162\x65\145\156\x20\x6f\146\40\143\165\x73\x74\x6f\x6d\40\160\157\x73\164\x20\x74\171\160\145\163\56", PR__MDL__RELATION))->awagieqcmmwkgwgs(true), self::iseogkiymousogom(self::uwoqgmuqskqcqsag(), __("\x49\164\x65\x6d\163", PR__MDL__RELATION), [self::wcwmusaouiqaqeww(self::iccwcygaeqmomooo, __("\105\x6e\x61\x62\154\x65", PR__MDL__RELATION))->iyouqgqicyqkiswi(6)->mkmssscwmeekwgqo(), self::wcwmusaouiqaqeww(self::iycuamekoueuemoy, __("\x49\x6e\x76\145\162\x73\145\40\123\151\x64\x65", PR__MDL__RELATION))->iyouqgqicyqkiswi(6), self::kimoeccokowuaiic(self::mkousmkiawwousws, __("\111\x6d\141\x67\x65", PR__MDL__RELATION))->wyqeckayigciacse("\x73\155\x61\154\x6c"), self::ymuegqgyuagyucws(self::NAME, __("\101\x64\x6d\151\x6e\x20\x50\141\x6e\x65\154\x20\x4e\141\155\145", PR__MDL__RELATION)), self::ckuwucygcwsiawms(self::igecewwoemccgwsq, __("\117\x72\151\x67\x69\x6e\40\x50\157\x73\164\40\124\171\160\145", PR__MDL__RELATION), $sciomagaqmgggsiu)->eumecwmqmukqgyea(), self::ckuwucygcwsiawms(self::gygsikewooaciecc, __("\x44\x65\x73\x74\x69\x6e\141\x74\151\157\156\x20\x50\x6f\x73\x74\40\x54\171\x70\x65", PR__MDL__RELATION), $sciomagaqmgggsiu)->eumecwmqmukqgyea(), self::ymuegqgyuagyucws(self::qgwwgcuuykqagamk, __("\117\x72\x69\x67\151\156\x20\x50\x6f\x73\x74\x20\124\x79\160\x65\x20\124\x69\x74\154\145", PR__MDL__RELATION), sprintf("\x3c\163\x74\162\x6f\156\x67\76\x25\163\x3a\x3c\57\163\x74\x72\x6f\156\147\76\x20\x25\163", __("\116\x6f\164\x69\143\x65", PR__MDL__RELATION), __("\x57\x69\154\154\x20\x62\x65\x20\x75\163\145\144\x20\x61\163\x20\x73\154\x75\x67\40\164\x6f\157\56", PR__MDL__RELATION))), self::ymuegqgyuagyucws(self::uyqakoogaigomqmq, __("\104\x65\163\164\151\x6e\141\x74\x69\x6f\x6e\x20\x50\157\163\x74\40\124\x79\160\145\40\124\151\x74\154\x65", PR__MDL__RELATION)), self::cwiuiiakukcsaakw(self::ascagqcquwgmygkm)])->usosgsaaimqcysyk()]; } }