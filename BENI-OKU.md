
### PHP-DS çok basittir. 16 adımda tamamen öğrenebilirsiniz :) : https://github.com/insayd10/PHP-DS/wiki/Learn-PHP-DS-in-16-steps
***

# PHP-DS Nedir?
**
Tamamen farklı bir i18n deneyimi!
* Kısaca

Bir sınıfa PHP ile kod veriyorsunuz ve sınıfınızın birden çok dile çevirebilmesini istiyorsunuz. Bildiğiniz gibi dosyada yapılan düzenlemeler çok zahmetlidir. "PHP-DS", farklı bir yöntemle, sınıflarınızın birden çok dili destekleyebilen bir altyapıya sahip olmasını sağlar.
* Uzunnnca bir

Bildiğiniz üzere OOP(Nesne yönelimli programlama) hayatımıza girerek zaten gelişmekte olan bir teknolojiyi, tabiri caizse koşturmaya başladı. OOP nin sınırları mechul, fakat kullanımı standarttan öte geçemiyor. Aynı tarzda bir kodlamayla, farklı amaçlar için çalışıyoruz.

Özgür bir yazılım, özgürce kitlelere ulaşmalı PHP-DS' yi büyük bir hedef kitlesi olan bir sınıfın, hızlı ve kolay bir şekilde kitlesine ulaşmak, kitlesinin ona adaptasyonunu kolaylaştırmak için tasarladık. Yanlış anlaşılabileceği üzere globallikten, standarttan kaçmak değil aksine hızlı bir şekilde bunlara ulaşılmasını hedefliyoruz.
Biz insanların birden fazla kullanımı olan methodlar geliştirmesini hedefledik. örnek olarak bir upload sınıfı için file_upload::file($file); şeklinde bir kullanım olsun. Bu sınıfın sahibi, PHP-DS kullanarak dil dosyaları oluşturup, her bir dil için farklı method kullanımları gerçekleştirebilir. yani bir methodun birden fazla kullanımı olabilir. bir İngiliz bu sınıfı kullanırken yukarıdaki kodu yazarken, bir Türk aynı sınıfı kullanırken dosya_upload::dosya($dosya); koduyla aynı işlemi gerçekleştirebilir. Ayrıca, bir İngiliz "Warning: file type is not supported!" olarak çıktı alırken, aynı sınıfı kullanan bir Türk "Dikkat: dosya tipi desteklenmiyor." şeklinde, bir Alman ise "Vorsicht: dateityp wird nicht unterstützt." olarak aynı çıktıyı alabilir.
* Belki

insanlar hala daha veresiye defteri tutuyor olacaktı. düşünsenize excell gibi bir yazılım dil desteği sunmuş ve çok büyük yaş grubundaki insanların bile işleri interaktif hale gelmiş, onları bünyesine katmış.
* Arayüz- Arabirim- Araeleman kavramları:

Arayüz nedir? Arayüz kavramı sadece grafik arayüzleriyle sınırlı değildir. Grafik arayüzleri her ne kadar son kullanıcının işlerini kolaylaştırsa da; günümüzde yeni bir kavram olan "ara elaman"'lar için yetersiz kalmaktadır. Araelemanlar, son kullanıcılar gibi ihtiyacı olan programı kullananlardan bir tık üstte; kod üreticilerinden bir tık altta olan bir sınıftır. Araelemanlar, son kullanıcıya hitap edebilmek için kod üreticilerinin ürünlerini kullanırlar. Wordpress bir kod üreticidir. Wordpress için template hazırlarken wordpressin methodlarını kullanan bir kişi ise bir Araeleman. İşte bu noktada kod üreticileri, ürünlerinin daha fazla talep görmesi için ara elemanlar için grafik arayüzlerinden ayrı; bir ara birim geliştirme ihtiyacı duymaktadır. Arabirimleri ile her kesimden ara elemanlara ulaşabilir, ve sonuç olarak son kullanıcıya ulaşabilirler.

PHP-DS bu süreçte ilk adımı attı. Güle güle geliştirmeler:)
