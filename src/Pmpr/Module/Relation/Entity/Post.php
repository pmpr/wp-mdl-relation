<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae926dfd6e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Entity; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Relation\Manager\PostManager; use Pmpr\Module\Relation\Setting; use WP_Post; use WP_Post_Type; class Post extends Entity { public function __construct() { $this->name = Constants::mswoacegomcucaik; $this->title = __("\120\x6f\x73\x74\x20\124\x79\x70\145\163", PR__MDL__RELATION); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\x64\x5f\155\145\x74\141\137\142\157\170\145\x73", [$this, "\x73\151\x6b\x71\x67\147\x77\x6d\155\x79\x6b\165\x69\171\155\171"]); parent::wigskegsqequoeks(); } public function eyamqkqiykagecsw() : ?string { return IconInterface::awmsmqouyuugigus; } public function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, bool $kiyaqqoyagguscog = false) { $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $ucccueqywigcukcc = "\x5e{$iakkeikwceeomgyq}\x2f\50\133\x5e\x2f\x5d\x2b\x29\57{$muowmkwsoauukiag}\x2f{$aaokuekaimigoyue}\x2f"; $gqgemcmoicmgaqie = "\151\156\x64\145\170\56\160\x68\x70\77\160\x6f\x73\164\x5f\x74\171\x70\x65\75{$muowmkwsoauukiag}\x26{$yygmoeguaqyumuui->target}\75{$iakkeikwceeomgyq}\x26{$yygmoeguaqyumuui->metakey}\75{$gwiwsycaaqgwmewg}\46{$yygmoeguaqyumuui->side}\x3d\x24\x6d\141\x74\x63\150\x65\163\x5b\61\135"; if (!$kiyaqqoyagguscog) { goto ygcsmkuycoagwyou; } $this->caokeucsksukesyo()->kuggecgwaickowwu()->wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2); ygcsmkuycoagwyou: $ucccueqywigcukcc .= "\77\x24"; return [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\164\157\160"]; } public function sikqggwmmykuiymy($useksmwkuswkwcqg) { $mgkceomocowocqyo = $this->weysguygiseoukqw(Constants::osiogououyayqyck, "\156\x6f\162\x6d\x61\x6c"); if (!($oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $useksmwkuswkwcqg))) { goto ssoucoucsgccekwe; } foreach ($oammesyieqmwuwyi as $kooyscwkscsogysg => $gsgwomokyuwmqqkg) { $mksyucucyswaukig = $this->mauewaeoemuusikw($kooyscwkscsogysg); if (!$mksyucucyswaukig) { goto qqewoyookaskiuek; } $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([Constants::gouqcwikiiygyasc => "{$kooyscwkscsogysg}\137\x6d\x65\x74\141\137\x62\157\170", Constants::okeuagwgwkmiokac => [$gsgwomokyuwmqqkg, $kooyscwkscsogysg], Constants::qgqyauaqwqmqseim => $this->eyamqkqiykagecsw(), Constants::qescuiwgsyuikume => sprintf(__("\122\x65\154\x61\x74\x69\157\156\40\x77\x69\x74\x68\x20\x25\x73", PR__MDL__RELATION), $mksyucucyswaukig->label), Constants::cacismqswgaewkuu => $useksmwkuswkwcqg, Constants::osiogououyayqyck => $mgkceomocowocqyo, Constants::wwgusigoaksqmwsm => [$this, "\171\163\171\145\151\x69\x79\161\x73\x65\143\155\x67\157\x79\165"]]); qqewoyookaskiuek: iggyqogweyosuikc: } kqksuugcgsyeoayy: ssoucoucsgccekwe: } public function ysyeiiyqsecmgoyu($post, $qookweymeqawmcwo, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { [$gsgwomokyuwmqqkg, $kooyscwkscsogysg] = self::gagauoqcuosakeiq($qookweymeqawmcwo); return parent::ysyeiiyqsecmgoyu($post, $gsgwomokyuwmqqkg, $kooyscwkscsogysg, $koaqeegoeiaiccse); } public static function gagauoqcuosakeiq($qookweymeqawmcwo) { if (!(isset($qookweymeqawmcwo[Constants::okeuagwgwkmiokac]) && $qookweymeqawmcwo[Constants::okeuagwgwkmiokac])) { goto qkcyqocqqwmqgqww; } return $qookweymeqawmcwo[Constants::okeuagwgwkmiokac]; qkcyqocqqwmqgqww: self::symcgieuakksimmu()->yiggueaiwiygoiyi(__("\x53\157\x6d\x65\x74\150\x69\156\147\40\x69\163\40\x77\162\x6f\x6e\x67\x20\x69\156\x20\162\145\154\141\164\x69\x6f\156\x20\146\x69\145\x6c\x64\40\x72\145\156\x64\145\162\x69\x6e\147", PR__MDL__RELATION), "\162\145\x6c\141\x74\x69\x6f\x6e", Constants::imkacwmiuiykyuim); return null; } public function mauewaeoemuusikw($muowmkwsoauukiag) : ?WP_Post_Type { return $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq($muowmkwsoauukiag); } public function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; if (!$mcaisukqqyosuasi instanceof WP_Post) { goto miyqyeiwquwsacsm; } $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); miyqyeiwquwsacsm: return $oammesyieqmwuwyi; } public function goqmcwikekcgyokg() : array { $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get(); $oammesyieqmwuwyi = []; if (!$post instanceof WP_Post) { goto eegqyykygiccaoeo; } $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $post->post_type); eegqyykygiccaoeo: return $oammesyieqmwuwyi; } public function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null) { if ($ymqmyyeuycgmigyo instanceof WP_Post || is_numeric($ymqmyyeuycgmigyo)) { goto ywqgcegomwaiuquc; } $mcaisukqqyosuasi = $this->caokeucsksukesyo()->kyqakacqeumicgag()->ssacaeeassumyuws($ymqmyyeuycgmigyo, Constants::ckmqoekmugkggeym, $sqeykgyoooqysmca); goto wmmggowmigekyoso; ywqgcegomwaiuquc: $mcaisukqqyosuasi = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($ymqmyyeuycgmigyo); wmmggowmigekyoso: return $mcaisukqqyosuasi; } public function muekkssosomcakme($mcaisukqqyosuasi, $ayegqaqygsqsmews) : array { $mguygkocuoaoqqkg = []; if (!($gwiwsycaaqgwmewg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, Constants::moegqsqomeumiomk))) { goto soqqemyioggmoakg; } $mguygkocuoaoqqkg = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ayegqaqygsqsmews->{Constants::gygsikewooaciecc}, $gwiwsycaaqgwmewg); soqqemyioggmoakg: return $mguygkocuoaoqqkg; } public function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi) { $gqgemcmoicmgaqie->set(Constants::eqomgewoayseioos, $oammesyieqmwuwyi); $gqgemcmoicmgaqie->set(Constants::gqiasegggowomgie, Constants::eqomgewoayseioos); return $gqgemcmoicmgaqie; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return PostManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy(Setting $amakmumgguksgmum) : array { $sciomagaqmgggsiu = $this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); return [$amakmumgguksgmum->yyuwuqsiucweeoue(Constants::osiogououyayqyck)->mkmssscwmeekwgqo()->acauweqyyugwisqc([Constants::qayiiikwusguoask => __("\x53\x69\x64\145\142\141\162", PR__MDL__RELATION), Constants::ycusscwsoggmuweq => __("\x42\157\x74\x74\x6f\x6d", PR__MDL__RELATION)])->gswweykyogmsyawy(__("\115\x65\x74\x61\x42\x6f\170\40\120\157\x73\151\x74\151\157\x6e", PR__MDL__RELATION))->gucwmccyimoagwcm(__("\120\157\163\x69\164\x69\157\156\x20\157\x66\40\155\x65\x74\x61\x62\157\x78\40\x69\x6e\x20\145\144\x69\164\40\163\143\x72\x65\x65\156\40\x6f\146\x20\143\x75\163\164\157\155\x20\x70\x6f\163\x74\x20\164\171\160\145\x73\56", PR__MDL__RELATION)), $amakmumgguksgmum->qqmgmgasauucoago(self::uwoqgmuqskqcqsag())->gswweykyogmsyawy(__("\x49\164\x65\155\x73", PR__MDL__RELATION))->omsoosuoikgueyke()->mkksewyosgeumwsa($amakmumgguksgmum->wcwmusaouiqaqeww(Constants::iccwcygaeqmomooo)->gswweykyogmsyawy(__("\105\x6e\141\142\x6c\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->wcwmusaouiqaqeww(Constants::iycuamekoueuemoy)->gswweykyogmsyawy(__("\x49\156\166\x65\x72\163\145\x20\123\151\x64\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->quaegkgkucwyeiqg(Constants::mkousmkiawwousws)->gswweykyogmsyawy(__("\111\155\x61\x67\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(Constants::NAME)->gswweykyogmsyawy(__("\101\144\155\151\x6e\x20\120\141\156\x65\x6c\40\116\141\155\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->mccagaqeagiikkec(Constants::igecewwoemccgwsq)->acauweqyyugwisqc($sciomagaqmgggsiu)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\x4f\x72\151\147\151\156\x20\x50\x6f\163\164\x20\x54\x79\x70\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->mccagaqeagiikkec(Constants::gygsikewooaciecc)->acauweqyyugwisqc($sciomagaqmgggsiu)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\x44\x65\163\164\x69\x6e\x61\x74\x69\x6f\156\x20\120\x6f\163\x74\40\x54\x79\160\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(Constants::qgwwgcuuykqagamk)->gswweykyogmsyawy(__("\x4f\x72\x69\147\x69\x6e\40\x50\157\x73\164\40\x54\171\160\145\40\124\x69\x74\154\x65", PR__MDL__RELATION))->gucwmccyimoagwcm(sprintf("\45\163\72\x20\45\x73", $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis(__("\116\157\164\x69\143\145", PR__MDL__RELATION)), __("\127\151\x6c\x6c\40\x62\145\x20\x75\163\x65\144\x20\141\163\40\163\154\165\147\x20\x74\157\x6f\56", PR__MDL__RELATION))))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(Constants::uyqakoogaigomqmq)->gswweykyogmsyawy(__("\104\145\x73\164\x69\x6e\x61\x74\151\x6f\156\x20\120\x6f\x73\164\x20\x54\171\160\x65\40\x54\x69\x74\154\x65", PR__MDL__RELATION)))]; } }
