<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6550df85d71cb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation; use Pmpr\Module\Relation\Entity\Post; use Pmpr\Module\Relation\Manager\PostManager; class Hook extends Container { public function wigskegsqequoeks() { $this->waqewsckuayqguos(self::esgskoesuqecuuwg . "\141\x64\x64\137\x64\145\146\141\165\154\164\x5f\151\x74\x65\x6d\x73", [$this, "\143\x79\x6b\x79\x6b\147\x65\171\155\x6b\x65\x63\x6d\157\145\x6b"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(self::esgskoesuqecuuwg . "\x67\x65\164\x5f\x70\x6f\x73\164\163", [$this, "\151\171\163\163\x67\x6f\151\x77\147\167\x79\147\145\x61\x63\x67"], 10, 4)->aqaqisyssqeomwom("\147\x65\164\137\x76\x61\x6c\x69\x64\137\162\145\154\x61\x74\151\x6f\x6e\163", [$this, "\x73\167\147\145\x77\141\157\x77\153\x77\x69\x69\163\x6b\x6b\143"], 10, 2)->aqaqisyssqeomwom("\147\145\x74\137\160\157\x73\x74\x73\x5f\x61\162\x67\163", [$this, "\x6d\163\x79\x79\x71\x61\151\143\157\x65\161\161\143\x6f\x6d\143"], 10, 2)->aqaqisyssqeomwom(self::esgskoesuqecuuwg . "\x67\145\164\x5f\x70\157\163\164\137\x62\171\137\155\145\164\141\153\x65\x79", [$this, "\x6b\157\167\145\145\163\x63\155\151\143\x6f\153\x75\157\x6f\x6b"], 10, 2); } public function koweescmicokuook($ayegqaqygsqsmews, $gwiwsycaaqgwmewg = null) { if (!$gwiwsycaaqgwmewg) { goto coywmiyqgsweuiic; } $ayegqaqygsqsmews = $this->ugcmciwwskkeimse(Post::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); coywmiyqgsweuiic: return $ayegqaqygsqsmews; } public function cykykgeymkecmoek($oammesyieqmwuwyi = []) { if (!$oammesyieqmwuwyi) { goto gygawoqywkukmqee; } $uwomkgseoiegeume = []; $amakmumgguksgmum = Post::uwoqgmuqskqcqsag(); $cmaccwokqweqweqi = $this->iucouyoswwsakqyc($amakmumgguksgmum); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $igqsaukqcqscimok) { $kcguiwgkqgcuyiku = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::gygsikewooaciecc); $iakkeikwceeomgyq = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::igecewwoemccgwsq); $gwiwsycaaqgwmewg = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::moegqsqomeumiomk); if (!(!isset($cmaccwokqweqweqi[$gwiwsycaaqgwmewg]) && $uusmaiomayssaecw && $kcguiwgkqgcuyiku && $iakkeikwceeomgyq)) { goto oouoqimaaqcmccay; } $uwomkgseoiegeume[] = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($igqsaukqcqscimok, [self::ascagqcquwgmygkm => $uusmaiomayssaecw, self::iccwcygaeqmomooo => self::ON, self::iycuamekoueuemoy => true]); oouoqimaaqcmccay: ycakugokkqkuqyiu: } siqagquguiemuoku: if (!$uwomkgseoiegeume) { goto sycygoiaiqqageym; } $this->kmuweyayaqoeqiyw()->eiaacegkigqiwawg($amakmumgguksgmum, array_values(array_merge($cmaccwokqweqweqi, $uwomkgseoiegeume))); sycygoiaiqqageym: gygawoqywkukmqee: } public function iyssgoiwgwygeacg($wyoiwuqokyeeuguk, $mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { if (!($mcaisukqqyosuasi && $ccamueccusigaaio && $gwiwsycaaqgwmewg)) { goto kciouyuaqkyqomam; } $wyoiwuqokyeeuguk = PostManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); kciouyuaqkyqomam: return $wyoiwuqokyeeuguk; } public function msyyqaicoeqqcomc($ywmkwiwkosakssii = []) { if (!(isset($ywmkwiwkosakssii[self::ggsoiqkcasskkeae]) && !isset($ywmkwiwkosakssii[self::eqomgewoayseioos]))) { goto umgaesggesswoaqe; } $ayegqaqygsqsmews = $ywmkwiwkosakssii[self::ggsoiqkcasskkeae]; if (!$ayegqaqygsqsmews) { goto wwkgkaecgiwggcck; } [$iakkeikwceeomgyq, $oammesyieqmwuwyi] = PostManager::awiyyawscoigiuae($ayegqaqygsqsmews, [self::ymckmcsiymwqucoq => self::oyaoekcogwkcekcc]); $ywmkwiwkosakssii[self::eqomgewoayseioos] = $oammesyieqmwuwyi; $ywmkwiwkosakssii[self::kcaoouwiygwwmiok] = $iakkeikwceeomgyq; unset($ywmkwiwkosakssii[self::ggsoiqkcasskkeae]); wwkgkaecgiwggcck: umgaesggesswoaqe: return $ywmkwiwkosakssii; } public function swgewaowkwiiskkc($gsgwomokyuwmqqkg = [], $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::qayiiikwusguoask => null, self::mgsccwumkcawaqcy => Post::uwoqgmuqskqcqsag(), self::aisguagukaewucii => self::eoaiagsgqsmskugs]); return $this->gyykaeouuskoqiye($ywmkwiwkosakssii[self::mgsccwumkcawaqcy], $ywmkwiwkosakssii[self::qayiiikwusguoask], $ywmkwiwkosakssii[self::aisguagukaewucii]); } }
