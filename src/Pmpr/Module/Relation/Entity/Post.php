<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6692921c1f1a9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Entity; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Relation\Manager\PostManager; use Pmpr\Module\Relation\Setting; use WP_Post; use WP_Post_Type; class Post extends Entity { public function __construct() { $this->name = self::mswoacegomcucaik; $this->title = __("\120\157\x73\x74\40\124\171\160\145\163", PR__MDL__RELATION); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x64\137\155\x65\x74\141\x5f\x62\x6f\170\145\x73", [$this, "\x73\151\153\x71\147\x67\167\x6d\155\171\x6b\165\151\x79\155\x79"]); parent::wigskegsqequoeks(); } public function eyamqkqiykagecsw() : ?string { return IconInterface::awmsmqouyuugigus; } public function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, bool $kiyaqqoyagguscog = false) { $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $ucccueqywigcukcc = "\136{$iakkeikwceeomgyq}\57\50\x5b\136\57\x5d\x2b\51\x2f{$muowmkwsoauukiag}\57{$aaokuekaimigoyue}\57"; $gqgemcmoicmgaqie = "\x69\x6e\x64\145\x78\56\160\150\x70\77\160\x6f\x73\x74\137\x74\x79\x70\145\75{$muowmkwsoauukiag}\46{$yygmoeguaqyumuui->target}\75{$iakkeikwceeomgyq}\x26{$yygmoeguaqyumuui->metakey}\x3d{$gwiwsycaaqgwmewg}\46{$yygmoeguaqyumuui->side}\x3d\x24\155\141\164\143\x68\x65\163\133\61\x5d"; if (!$kiyaqqoyagguscog) { goto ygcsmkuycoagwyou; } $this->caokeucsksukesyo()->kuggecgwaickowwu()->wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2); ygcsmkuycoagwyou: $ucccueqywigcukcc .= "\77\44"; return [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\164\157\160"]; } public function sikqggwmmykuiymy($useksmwkuswkwcqg) { $mgkceomocowocqyo = $this->weysguygiseoukqw(self::osiogououyayqyck, "\156\x6f\x72\155\x61\x6c"); if (!($oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $useksmwkuswkwcqg))) { goto ssoucoucsgccekwe; } foreach ($oammesyieqmwuwyi as $kooyscwkscsogysg => $gsgwomokyuwmqqkg) { $mksyucucyswaukig = $this->mauewaeoemuusikw($kooyscwkscsogysg); if (!$mksyucucyswaukig) { goto qqewoyookaskiuek; } $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([self::gouqcwikiiygyasc => "{$kooyscwkscsogysg}\x5f\x6d\145\164\141\x5f\x62\157\170", self::okeuagwgwkmiokac => [$gsgwomokyuwmqqkg, $kooyscwkscsogysg], self::qgqyauaqwqmqseim => $this->eyamqkqiykagecsw(), self::qescuiwgsyuikume => sprintf(__("\122\x65\154\141\x74\151\x6f\x6e\40\167\151\x74\150\40\45\x73", PR__MDL__RELATION), $mksyucucyswaukig->label), self::cacismqswgaewkuu => $useksmwkuswkwcqg, self::osiogououyayqyck => $mgkceomocowocqyo, self::wwgusigoaksqmwsm => [$this, "\x79\163\171\x65\151\x69\171\161\163\145\x63\155\x67\x6f\171\x75"]]); qqewoyookaskiuek: iggyqogweyosuikc: } kqksuugcgsyeoayy: ssoucoucsgccekwe: } public function ysyeiiyqsecmgoyu($post, $qookweymeqawmcwo, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { [$gsgwomokyuwmqqkg, $kooyscwkscsogysg] = self::gagauoqcuosakeiq($qookweymeqawmcwo); return parent::ysyeiiyqsecmgoyu($post, $gsgwomokyuwmqqkg, $kooyscwkscsogysg, $koaqeegoeiaiccse); } public static function gagauoqcuosakeiq($qookweymeqawmcwo) { if (!(isset($qookweymeqawmcwo[self::okeuagwgwkmiokac]) && $qookweymeqawmcwo[self::okeuagwgwkmiokac])) { goto qkcyqocqqwmqgqww; } return $qookweymeqawmcwo[self::okeuagwgwkmiokac]; qkcyqocqqwmqgqww: self::symcgieuakksimmu()->yiggueaiwiygoiyi(__("\x53\157\x6d\x65\164\150\151\x6e\147\x20\151\163\40\167\x72\157\156\x67\x20\x69\x6e\40\x72\145\154\141\x74\x69\x6f\156\40\146\151\145\x6c\144\x20\x72\x65\x6e\144\x65\x72\151\156\x67", PR__MDL__RELATION), "\x72\x65\154\141\164\x69\x6f\x6e", self::imkacwmiuiykyuim); return null; } public function mauewaeoemuusikw($muowmkwsoauukiag) : ?WP_Post_Type { return $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq($muowmkwsoauukiag); } public function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; if (!$mcaisukqqyosuasi instanceof WP_Post) { goto miyqyeiwquwsacsm; } $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); miyqyeiwquwsacsm: return $oammesyieqmwuwyi; } public function goqmcwikekcgyokg() : array { $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get(); $oammesyieqmwuwyi = []; if (!$post instanceof WP_Post) { goto eegqyykygiccaoeo; } $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $post->post_type); eegqyykygiccaoeo: return $oammesyieqmwuwyi; } public function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null) { if ($ymqmyyeuycgmigyo instanceof WP_Post || is_numeric($ymqmyyeuycgmigyo)) { goto ywqgcegomwaiuquc; } $mcaisukqqyosuasi = $this->caokeucsksukesyo()->kyqakacqeumicgag()->ssacaeeassumyuws($ymqmyyeuycgmigyo, self::ckmqoekmugkggeym, $sqeykgyoooqysmca); goto wmmggowmigekyoso; ywqgcegomwaiuquc: $mcaisukqqyosuasi = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($ymqmyyeuycgmigyo); wmmggowmigekyoso: return $mcaisukqqyosuasi; } public function muekkssosomcakme($mcaisukqqyosuasi, $ayegqaqygsqsmews) : array { $mguygkocuoaoqqkg = []; if (!($gwiwsycaaqgwmewg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, self::moegqsqomeumiomk))) { goto soqqemyioggmoakg; } $mguygkocuoaoqqkg = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ayegqaqygsqsmews->{self::gygsikewooaciecc}, $gwiwsycaaqgwmewg); soqqemyioggmoakg: return $mguygkocuoaoqqkg; } public function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi) { $gqgemcmoicmgaqie->set(self::eqomgewoayseioos, $oammesyieqmwuwyi); $gqgemcmoicmgaqie->set(self::gqiasegggowomgie, self::eqomgewoayseioos); return $gqgemcmoicmgaqie; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return PostManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy(Setting $amakmumgguksgmum) : array { $sciomagaqmgggsiu = $this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas([self::aisguagukaewucii => self::eoaiagsgqsmskugs]); return [$amakmumgguksgmum->yyuwuqsiucweeoue(self::osiogououyayqyck)->mkmssscwmeekwgqo()->acauweqyyugwisqc([self::qayiiikwusguoask => __("\123\x69\144\145\142\x61\162", PR__MDL__RELATION), "\141\x64\166\141\156\x63\145\144" => __("\x42\x6f\x74\x74\157\x6d", PR__MDL__RELATION)])->gswweykyogmsyawy(__("\115\x65\x74\x61\102\x6f\170\40\120\x6f\x73\x69\x74\x69\x6f\156", PR__MDL__RELATION))->gucwmccyimoagwcm(__("\x50\157\163\x69\x74\x69\157\156\40\157\x66\x20\x6d\145\164\141\142\157\x78\40\x69\x6e\40\145\144\x69\x74\x20\x73\143\x72\x65\145\x6e\x20\x6f\146\40\x63\x75\163\164\157\155\40\160\x6f\163\x74\40\x74\171\x70\x65\163\x2e", PR__MDL__RELATION)), $amakmumgguksgmum->qqmgmgasauucoago(self::uwoqgmuqskqcqsag())->gswweykyogmsyawy(__("\111\164\145\155\x73", PR__MDL__RELATION))->omsoosuoikgueyke()->mkksewyosgeumwsa($amakmumgguksgmum->wcwmusaouiqaqeww(self::iccwcygaeqmomooo)->gswweykyogmsyawy(__("\105\x6e\x61\142\154\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->wcwmusaouiqaqeww(self::iycuamekoueuemoy)->gswweykyogmsyawy(__("\x49\156\166\x65\x72\163\145\40\123\151\144\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->quaegkgkucwyeiqg(self::mkousmkiawwousws)->gswweykyogmsyawy(__("\111\155\x61\147\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(self::NAME)->gswweykyogmsyawy(__("\x41\144\x6d\x69\x6e\40\x50\x61\x6e\145\154\40\116\x61\x6d\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->mccagaqeagiikkec(self::igecewwoemccgwsq)->acauweqyyugwisqc($sciomagaqmgggsiu)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\117\162\151\x67\151\156\40\x50\157\x73\x74\x20\x54\171\160\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->mccagaqeagiikkec(self::gygsikewooaciecc)->acauweqyyugwisqc($sciomagaqmgggsiu)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\x44\x65\163\x74\151\x6e\141\x74\151\157\x6e\x20\120\157\163\164\40\x54\171\x70\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(self::qgwwgcuuykqagamk)->gswweykyogmsyawy(__("\x4f\x72\151\147\x69\x6e\x20\x50\157\163\164\40\124\171\x70\x65\40\124\151\x74\154\145", PR__MDL__RELATION))->gucwmccyimoagwcm(sprintf("\45\x73\x3a\40\x25\x73", $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis(__("\x4e\x6f\x74\x69\143\145", PR__MDL__RELATION)), __("\127\151\x6c\154\40\x62\145\x20\165\x73\x65\x64\x20\141\x73\40\x73\x6c\165\147\x20\x74\x6f\x6f\x2e", PR__MDL__RELATION))))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(self::uyqakoogaigomqmq)->gswweykyogmsyawy(__("\x44\x65\x73\x74\151\x6e\x61\x74\x69\157\156\40\120\x6f\x73\164\x20\x54\x79\160\145\x20\x54\x69\164\154\145", PR__MDL__RELATION)))]; } }
