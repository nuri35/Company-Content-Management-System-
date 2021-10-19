## Company-Content-Management-System-



![alt text](https://quasa.io/storage/images/news/Rw8fpNmIAJGf8m03cEZRSde2a6r7UdFQ7RcO1J53.png)



 ## :computer: Projenin Kurulumu
 Projemizi php  ile oluşturulmuş bulunmakta.Projemizde ki dosyaların çalışabilmesi için apache kurulması gerekecektir.Ayrıca Mysql veritabanı ile oluşturulduğu için bu uygulamada ki örnek olarak yapmış olduğum classicmodels.sql veritabanını kullanabilirsiniz.
 
 İlk önce Xampp uygulamasını kuralım.Bunun sayesinde 3000 portundan server olarak uygulamamıza bağlanıp veri tabanıyla iletişim halinde olacak.Özellikle uygulamamızı oluşturduğumuz bütün dosyalar xampp uygulamasının kurulu oldugu htdocs dosyanın içinde olmalıdır.
 
![alt text]( https://github.com/nuri35/Company-Content-Management-System-/blob/master/im/a.PNG)


  ## 📑: Veri tabanı görünümü
 
 ![alt text](https://github.com/nuri35/Company-Content-Management-System-/blob/master/im/b.PNG)

 ![alt text](https://github.com/nuri35/Company-Content-Management-System-/blob/master/im/c.PNG)

Uygulamada 3 rol bulunmaktadır. 

Kullanıcıların login işlemlerinde giriş algoritması şu şekildedir; Eğer giriş yapan kişiler 10 tane kere yanlış girdiklerinde kayıt logları tutulup 1 saat hesapları kitlenmektedir.1 saat sonra hesaplarına giriş yapabilirler.Bu bilgiler veri tabanında tutulmaktadır

Uygulamayı kurduktan sonra örnek olması adına yönetici şifresi ve ismi bulunmaktadır.Giriş yapabilirsiniz.Sistemin yönetici veya çalışan olduğunu 1 ve 3 numaralarından anlamaktadır. 1 = yönetici, 3 = çalışan anlamına gelır.

 ![alt text](https://github.com/nuri35/Company-Content-Management-System-/blob/master/im/Ekran%20Al%C4%B1nt%C4%B1s%C4%B1.PNG)

  ## 📑: Ürünlerin kategorilenme yapısı

 ![alt text](https://github.com/nuri35/Company-Content-Management-System-/blob/master/im/sd.PNG)


 
### 1-Yönetici Rolü 

* 💸:: **Ürün ekleme işlemleri :** Yönetici **Uygulama** aracılığı ile şirketteki ürünleri görebilir, ve şirket adına ürün ekleyebilir, silebilir.

 🗃️:**Profil işlemleri :** Yönetici **Uygulama** aracılığı ile  profillerinde istediği dosyaları ekleyebilir.Profilini güncelliyebilir.


### 2-Şirket çalışan Rolü 

* 💸:: **Ürün ekleme işlemleri :** Çalışan **Uygulama** aracılığı ile şirketteki ürünleri görebilir, ve şirket adına ürün ekleyebilir, silebilir.

 🗃️:**Profil işlemleri :** Çalışan **Uygulama** aracılığı ile  profillerinde istediği dosyaları ekleyebilir.Profilini güncelliyebilir.


### 3-Müşteri Rolü

* 💸:: **Alışveriş ilemleri :** Müşteriler **Uygulama** aracılığı ile şirketteki ürünleri görebilir, sepetine ekleyip ürün siparişi verebilir

* 🤢: **arama İşlemler :** Müşteriler **Uygulama** aracılığı ile istediği ürünü arayabilir.

* 🗃️:**Filtreleme İşlemleri :** Kullanıcı **Uygulama** aracılığı ile  recursive fonksiyonları sayesinde kategorileşmiş ürünleri filtreleyebilir.

 🗃️:**Profil işlemleri :** Kullanıcı **Uygulama** aracılığı ile  profillerinde istediği dosyaları ekleyebilir.Profilini güncelliyebilir.

<h2> 🛠 &nbsp;Kullanılan Teknolojiler</h2>

<code><img height="30" src="https://d1.awsstatic.com/asset-repository/products/amazon-rds/1024px-MySQL.ff87215b43fd7292af172e2a5d9b844217262571.png"></code>
<code><img height="30" src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg"></code>
