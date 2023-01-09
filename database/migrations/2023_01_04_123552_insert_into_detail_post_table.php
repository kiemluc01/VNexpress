<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class InsertIntoDetailPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('detail_post')->insert(
            array(
                'post_id' => '1',
                'content' => 'Thông tin được Phó chủ tịch UBND tỉnh Đồng Tháp Đoàn Tấn Bửu xác nhận lúc 18h31 ngày 4/1 tại hiện trường tai nạn. Đến thời điểm này, đơn vị cứu hộ đã gần 100 giờ tìm kiếm với nhiều phương án nhưng không thành công. Cọc bêtông dài 35 m nơi cháu bé mắc kẹt chưa thể rút lên được.
Theo ông Bửu, liên ngành pháp y, y tế và chính quyền địa phương đánh giá các yếu tố như: vị trí bé bị tai nạn, độ sâu khi rơi, thời gian kéo dài, bị chấn thương, đồng thời quan sát hiện trường cùng các yếu tố chuyên môn khác, nên giai đoạn đầu tiên lượng xấu.
"Đến thời điểm hiện nay các cơ quan chuyên môn đã có thủ tục xác định nạn nhân tử vong và tìm mọi cách đưa em lên sớm nhất để lo hậu sự", Phó chủ tịch tỉnh Đồng Tháp cho biết.
Ông Bửu cũng cho biết sau khi các cơ quan chuyên môn kết luận bé tử vong, việc cứu hộ cũng sẽ thay đổi. Trước đây, lực lượng cứu hộ tiến hành song song giải cứu và cố gắng duy trì sự sống cho em bé. Tuy nhiên, lúc này bé trai đã không còn nữa, nên biện pháp cứu hộ sẽ thay đổi với mục tiêu sớm đưa bé lên để lo hậu sự.
Trước khi UBND tỉnh Đồng Tháp thông tin bé tử vong, anh Thái Văn Tấn Tài - cha bé Hạo Nam (40 tuổi), được chính quyền địa phương mời đến hiện trường vụ tai nạn. Anh đi đến với khuôn mặt thất thần, đôi mắt hoe đỏ. Những ngày qua, anh luôn có mặt ở hiện trường tìm kiếm với mong muốn cứu được con. Tại nhà anh Nam, nhiều hàng xóm có mặt để chia buồn cùng gia đình.
Tối nay, nhiều người dân đã dừng xe hai bên đầu cầu gần đường dẫn vào khu vực tai nạn để nghe ngóng. Cảnh sát liên tục phát loa yêu cầu đám đông giải tán, vãn hồi trật tự. Ở khu vực hiện trường đèn vẫn sáng, nhiều nhóm công binh, nhân viên kỹ thuật đang làm việc để sớm đưa trụ bêtông lên khỏi mặt đất.
Hôm 31/12/2022, Nam cùng 3 bạn vào dự án xây cầu Rọc Sen ở xã Phú Lợi, cách nhà gần một km, nhặt phế liệu. Lúc đi qua công trình đang thi công, Nam lọt xuống cọc bêtông rỗng ruột, đường kính 25 cm, đã đóng sâu 35 m. Em kêu cứu chừng 10 phút rồi tiếng dần mất hút, theo nhân chứng.
Cảnh sát cứu hộ, cứu nạn tỉnh Đồng Tháp phối hợp với Quân khu 9 và nhiều lực lượng điều các thiết bị chuyên dụng đến đào bới, tìm kiếm nạn nhân. Do trụ bêtông cắm sâu, tiết diện nhỏ, nhân viên cứu hộ không thể chui lọt. Đến trưa nay, máy đã khoan sâu hơn 30 m, song gặp đất, đá cứng, bám dính cao, các máy khoan áp lực nước sau một đêm hoạt động đã không hiệu quả.
Chính quyền tỉnh Đồng Tháp nhìn nhận, việc thiếu kinh nghiệm, hạn chế máy móc, nhân lực khiến công tác cứu hộ nạn nhân gặp khó khăn, kéo dài.'
            ),
        );  

        DB::table('detail_post')->insert(
            array(
                'post_id' => '2',
                'content' => 'Cuối mỗi năm học khi cùng con gái thu dọn giá sách, chị Thúy Liễu, 34 tuổi, sống tại Hà Nội, đều thấy "còn vài quyển mới cứng".
Chị Liễu thường mua sách theo bộ cho con tại trường bởi "thế cho nhàn, tránh bị thiếu quyển này quyển kia". Con gái chị Liễu, năm nay lớp 4, vẫn học sách giáo khoa chương trình 2000. Trong bộ sách mua qua trường, chị Liễu thấy ngoài sách giáo khoa còn có sách bài tập, sách tham khảo, nhưng "bé bảo không dùng".
Tổng số tiền mà chị Liễu nộp để mua sách là 420.000 đồng. Trên website của Nhà xuất bản Giáo dục Việt Nam, chương trình lớp 4 có 9 cuốn sách giáo khoa, tổng 87.000 đồng. Như vậy, chị Liễu phải trả hơn 300.000 đồng cho các sách và tài liệu không phải sách giáo khoa - nghĩa là không bắt buộc. Sau khi con kiểm tra học kỳ I, chị Liễu nhận ra bốn cuốn chưa được dùng, tổng giá bìa khoảng 60.000.
Chị Nguyễn Mai, 45 tuổi, sống tại Hà Nam, cũng "không thấy con gái lớp 5 học An toàn giao thông hay Hoạt động trải nghiệm bao giờ". Ngoài ra, một số sách bài tập cũng không được dùng hết.
Lý giải điều này, cô Thanh, giáo viên tiểu học tại Hà Nam, cho biết phân phối chương trình có thời lượng dành cho hoạt động trải nghiệm, an toàn giao thông, nhưng thực tế 40 phút mỗi tiết đó được dành để nhắc nhở nền nếp, phổ biến công việc tuần tới. Cô cũng cho rằng danh mục sách đầu năm học "nhiều khi có sự định hướng", nên dù biết không dùng hết sách tham khảo, bài tập, nhưng trường vẫn gửi cho phụ huynh.
Chị Mai và chị Liễu chung nhận định, mỗi cuốn sách tham khảo thường có giá 10.000-15.000 đồng, sách bài tập đắt hơn, khoảng 30.000-40.000 là "không quá nhiều". Vì thế, các chị "không tiện hỏi giáo viên". "Tôi thấy phí nhưng rồi lại chẹp miệng cho qua, nghĩ vài chục nghìn không nên to chuyện", chị Liễu nói.
Số tiền lãng phí sẽ nhiều hơn "vài chục nghìn đồng", bởi cả nước có khoảng 20 triệu học sinh. Trong một bản tin trên website hồi tháng 8 năm 2017, Nhà xuất bản Giáo dục cho biết năm 2017 đã phát hành trên 100 triệu bản sách giáo khoa và cung ứng trên 95 triệu bản sách bổ trợ, sách tham khảo các loại, bản đồ, tranh ảnh giáo dục phục vụ nhu cầu của học sinh, giáo viên, phụ huynh. Về số đầu sách, năm học 2021-2022, Nhà xuất bản Giáo dục giới thiệu danh mục sách tham khảo dùng cho các thư viện trường học với 327 tên sách, ngoài ra hàng tháng đều có thêm từ vài chục đến cả trăm đầu sách tham khảo mới. Cách đó hai năm, năm 2019, nhà xuất bản này còn từng công bố danh mục gần 730 cuốn sách tham khảo. Giá một cuốn thấp nhất là 9.500 đồng, cao nhất là 199.000 đồng, phổ biến ở mức 30.000 - 45.000 đồng.
Cô Tình, giáo viên lớp 1 tại Hải Dương, cho biết đầu năm học vừa rồi, danh mục sách, đồ dùng cần mua, được gửi cho phụ huynh có giá gần 800.000 đồng. Trong đó, sách giáo khoa gồm 10 quyển, tổng 196.000 đồng, sách bổ trợ, ôn tập, tham khảo 397.000 đồng. Cô Tình cho biết sách bổ trợ, tham khảo được dùng trong các tiết buổi chiều, nhưng giáo viên "có ba đầu sáu tay" cũng không thể dạy hết. Chưa kể, nội dung sách có sự chồng chéo. Giáo viên phải đọc sách giáo dục địa phương, nếu trùng thông tin hoặc có bài nào tương tự sách Tự nhiên xã hội, Hoạt động trải nghiệm, Đạo đức thì lồng ghép để dạy tích hợp. Những quyển "hiếm khi dùng hết", theo cô Tình thường là những sách phát triển năng lực (giá 28.000 đồng một cuốn), hoạt động giáo dục bảo vệ môi trường (giá 25.000 đồng).
"Nếu mỗi học sinh có một cuốn sách không dùng đến giá 25.000 đồng, thì với 17 triệu học sinh phổ thông, số tiền lãng phí là 425 tỷ đồng", cô Tình nhẩm tính.
Nói về sự ra đời của sách tham khảo, thầy Nam, chuyên viên một phòng giáo dục ở miền Trung, cho biết những năm 2005, ở một số tỉnh bỗng xuất hiện những "đầu nậu". "Những người này đi tìm giáo viên, đặt viết sách tham khảo rồi trả thù lao, còn in ấn và bán đã có nhà xuất bản lo", thầy Nam nói, cho rằng việc này xuất phát từ nhu cầu của một số phụ huynh muốn con học nâng cao, nhưng dần dần bị biến tướng. Đến năm 2009, việc bán sách tham khảo như "combo" với sách giáo khoa cho học sinh rất phổ biến, theo nhận định của thầy Nam.
Dù Bộ Giáo dục và Đào tạo đã nhiều lần có văn bản cấm người trong ngành giáo dục giới thiệu, quảng bá loại sách này, nhưng "có một luồng đi nào đó khiến một thứ bất thường, của hiếm lại trở thành bình thường", thầy Nam nói, cho biết điều đáng lo ngại hơn là nhiều sách tham khảo được biên soạn cẩu thả, nhiều lỗi, nội dung không mang tính giáo dục vẫn được đưa đến tay học sinh.
Còn với sách bài tập, văn bản tháng 4/2013 của Bộ có nội dung: "Sách bài tập do Nhà xuất bản Giáo dục Việt Nam biên soạn dựa theo sách giáo khoa. Sách được Bộ thẩm định, cho phép xuất bản, in và phát hành". Điều này, hôm 29/12/2022 đã bị Thanh tra Chính phủ kết luận là sai do việc xuất bản, in ấn và tổng phát hành sách bài tập, sách tham khảo không phải chức năng, nhiệm vụ của Bộ Giáo dục và Đào tạo; khiến phụ huynh và học sinh hiểu nhầm rằng sách bài tập là tài liệu bắt buộc, phải mua kèm sách giáo khoa.
Chị Liễu cũng từng nghĩ toàn bộ danh mục sách cô giáo chủ nhiệm của con gái gửi trước năm học mới là bắt buộc, nên mua hết. Người mẹ cho rằng nhiều người rơi vào tình trạng như mình, bởi "chỉ sợ không đăng ký đủ, con lại thiếu sách học"
Ở nhiều địa phương, việc sử dụng kèm sách bài tập và sách giáo khoa trở thành "luật bất thành văn". Cô Nguyễn Hồng, giáo viên tiểu học tại Quảng Bình, cho hay từ trước đến nay thầy cô đều hướng dẫn phụ huynh mua sách giáo khoa cùng sách bài tập. "Sách này được thiết kế sát với bài học trong sách giáo khoa, giúp thuận tiện và tiết kiệm thời gian cho cả cô và trò", cô Hồng giải thích. Dù vậy, cô Hồng nói biết việc này là sai quy định.
Nhiều lần Bộ Giáo dục và Đào tạo nói không thẩm định sách tham khảo, đề nghị các trường học không lập danh mục, đóng gói thành bộ sách giáo khoa kèm sách bài tập, sách tham khảo và các tài liệu khác để học sinh, phụ huynh mua và sử dụng, nhưng việc bán sách theo "combo" vẫn diễn ra nhiều năm nay, gây bức xúc cho phụ huynh mỗi mùa khai trường.
Tháng 8 năm 2022, trước khi con trai bước vào năm học mới, chị Phương, sống tại Hà Nam, bất ngờ khi nhận được danh mục sách lớp 5 khoảng 14 cuốn, giá gần 290.000 đồng. Số sách và tiền này ít hơn nhiều so với bộ sách 28 cuốn giá 675.000 đồng mà chị đã đăng ký với giáo viên trong buổi họp phụ huynh cách đó hơn 2 tháng.
"Khi hỏi một số phụ huynh khác, tôi được biết năm nay Bộ làm chặt về việc bán sách tham khảo, vở bài tập trong trường học nên trường phải thu về", chị Phương kể, cho biết đây là lần đầu tiên chị gặp tình huống này.'   
            )
        );

        DB::table('detail_post')->insert(
            array(
                'post_id' => '3',
                'content' => 'Sau khi đạt mốc 3.000 tỷ USD năm ngoái, vốn hóa của Apple sau phiên giao dịch hôm qua (3/1) đã xuống dưới 2.000 tỷ USD.
Chốt phiên 3/1, cổ phiếu Apple giảm gần 4% do nhà đầu tư lo ngại về nhu cầu của người tiêu dùng đối với các sản phẩm của hãng. Việc này khiến giá trị của Táo Khuyết lần đầu tiên xuống dưới 2.000 tỷ USD kể từ đầu năm 2021.
Apple cũng là công ty thứ hai sau Amazon ghi nhận mức giảm vốn hóa 1.000 tỷ USD trong lịch sử chứng khoán Mỹ. Tính riêng năm 2022, Apple và Amazone đã lần lượt mất 846,34 tỷ USD và 834,06 tỷ USD giá trị thị trường.
Theo Nikkei, Apple gần đây đã thông báo cho một số nhà cung cấp về việc giảm đặt mua linh kiện cho AirPods, Apple Watch và MacBook. Việc này làm dấy lên lo ngại về nhu cầu sản phẩm Apple. Công ty hiện chưa đưa ra bình luận về thông tin này.
Giống như các công ty công nghệ khác, Apple đã phải vật lộn với những trục trặc trong chuỗi cung ứng. Lo ngại suy thoái kinh tế cũng có thể ảnh hưởng đến chi tiêu của nhà quảng cáo và người tiêu dùng, trong đó có sức mua iPhone.
Trước thời điểm mua sắm cao điểm cuối năm ngoái, Apple cho biết thị trường đang có "nhu cầu mạnh mẽ" đối với các mẫu iPhone 14 Pro và iPhone 14 Pro Max. Tuy nhiên, doanh số vẫn có thể thấp hơn dự báo, do sự gián đoạn liên quan đến Covid-19 tại một nhà cung cấp ở Trung Quốc.
Dù vậy, mức giảm vốn hóa từ 3.000 tỷ USD xuống 2.000 tỷ USD, tương đương 31%, vẫn ít hơn một số đại gia công nghệ Mỹ khác. Ví dụ, cổ phiếu của Amazon và Meta - công ty mẹ của Facebook - đã giảm lần lượt khoảng 50% và 63% trong năm qua.'
            )
        );

            DB::table('detail_post')->insert(
            array(
                'post_id' => '4',
                'content' => 'Nghe đứa cháu ruột nói với mẹ cậu mợ mừng tuổi có 20 nghìn bọ, tôi lập tức lấy lại số tiền và dạy cho cháu một bài học.
Tục mừng tuổi đầu năm có từ xa xưa, mang ý nghĩa cầu mong sức khỏe, may mắn đến với người già, trẻ nhỏ. Ngày nay, mừng tuổi trở thành phong tục không thể thiếu mỗi dịp Tết. Thế nhưng, theo năm tháng, những nét văn hóa truyền thống này dần bị biến tướng, thương mại hóa. Không khó để bắt gặp cảnh những đứa trẻ xé bao lì xì ngay trước mặt người mừng tuổi cho chúng rồi so bì, chê ít.
Cũng từng rơi vào tình cảnh dở khóc dở cười như vậy, độc giả CR chia sẻ: "Cách đây 5 năm, hai vợ chồng tôi lì xì đứa cháu ở quê. Chúng tôi chỉ nghĩ đơn giản là lì xì lấy may nên chỉ nhét 20.000 đồng vào phong bao đỏ. Thế nhưng vừa đưa lì xì xong, cháu tôi đã bóc ngay trước mặt, rồi quay ra nói với mẹ: "Cậu mợ mừng tuổi có 20 nghìn bọ". Mẹ nó nghe vậy cũng chỉ làm ngơ.
Thấy thế, tôi gọi cháu lại và nói: "Vì thái độ này của cháu, cậu sẽ thu hồi lại số tiền này. Cháu 14 tuổi rồi mà cư xử như thế là không được". Sau đó, tôi đề nghị thẳng thắn với anh chị của mình rằng nên dạy cháu cách cư xử trước khi chúng trưởng thành. Nghe vậy, bố mẹ đứa bé cũng tỏ thái độ không thoải mái.
Tất nhiên, tôi chấp nhận ánh mắt không mấy thiện cảm đó của anh chị và các cháu để cháu tôi được trưởng thành. Bởi thế hệ chúng tôi, ông bà, cha mẹ lì xì dù chỉ 2.000 đồng thì đứa nào cũng phải khoanh tay xin, vâng dạ, cảm ơn rối rít mới được, không có chuyện đòi hỏi hay tỏ thái độ không hài lòng về số tiền mừng tuổi".
Cùng chung tâm trạng khó xử khi bị trẻ chê lì xì ít, bạn đọc Duonghr kể lại: "Hồi tôi mới về nhà người yêu chơi, có lì xì cho mấy em họ của người yêu mỗi đứa 50.000 đồng. Ấy vậy mà ngay trước mặt tôi và mọi người, mấy đứa mở lì xì rồi chê có vậy thôi ạ?. Lúc ấy, tôi thấy rất khó chịu, vì các em chưa làm ra tiền và cũng chưa phải tiêu gì đến nhiều tiền như thế. Trong khi đây lại là tiền mồ hôi nước mắt tôi kiếm ra, nguyên hôm đó tôi mất gần một triệu đồng tiền mừng tuổi. Từ một tục lệ lấy may đầu năm, tôi thấy giờ mừng tuổi đã trở nên quá thực dụng. Gia đình nào cũng mất vài triệu tiền lì xì Tết, quá lãng phí. Rồi chưa kể không phải nhà nào cũng biết dạy con cách ứng xử đúng mực khi nhận tiền lì xì của người lớn".
>> Tiền lì xì nhiều hay ít không làm Tết mất vui
Độc giả Văn Minh lo ngại trước những biến tướng của phong tục lì xì: "Bây giờ về quê, đi chơi, tôi thấy trẻ con nhiều nhà Tết đến chỉ quây quần chơi với người lì xì nhiều tiền, chơi với con của người lì xì nhiều. Không khó bắt gặp cảnh gia đình của trẻ có cha mẹ nghèo bơ vơ chơi bên ngoài hoặc kiểu đứng từ xa mà không dám lại gần, nhìn rất tội. Tôi cho rằng, đó là do cách giáo dục của cha mẹ.
Chưa đến Tết mà nhiều cha mẹ đã mua heo đất, lên kế hoạch cho con mua gì từ tiền lì xì, vô tình khiến trẻ cứ ngóng chờ đến khoản tiền đó. Chính bản thân nhiều ông bố bà mẹ cũng cân đo tiền lì xì có bằng nhau không, có khi còn nói trước mặt trẻ, vậy thì làm sao chúng không hành xử như vậy? Gia đình tôi thì khác, luôn cấm các con xin tiền lì xì, cấm bóc bao lì xì ngay trước mặt người tặng, ai mừng tuổi thì phải lễ phép xin và cất ngay, nếu tự ý mở ra sẽ bị ăn roi. Cho nên dù có nhận được 1.000 đồng hay 100.000 đồng thì cũng phải chờ tới khi khách về mới được mở.
Bản thân mình cũng đã chứng kiến cảnh vì nhà nghèo nên Tết không biếu được ông bà nhiều. Đến khi thu hoạch hoa, trái vườn nhà thì loại quả nào xấu nhất là ông bà dành cho nhà tôi, quả đẹp để dành riêng cho ai biếu nhiều hơn. Mẹ tôi biết ý nên đều từ chối lấy. Chính vì vậy, tôi luôn cấm các con không được so bì, có nhiều biếu nhiều, có ít biếu ít, ai cho bao nhiêu cũng đón nhận và cảm ơn, tuyệt đối không được so sánh".
"Tôi chỉ thấy chán nhất là cảnh phát lì xì xong, mấy đứa nhỏ cứ xé toạc phong bao ngay tại đó, móc tiền ra đếm xong vứt thẳng cái bao trước mặt khách. Càng ngày tục mừng tuổi đầu năm càng biến tướng, mà đa phần là do cha mẹ không dạy dỗ trẻ đến nơi đến chốn. Như tôi ngày xưa, lúc còn rất nhỏ, cha mẹ đã dạy về lễ nghi ngày Tết, nói chuyện phải dạ thưa, ăn uống phải từ tốn...
Nhưng thời nay, hình như các ba mẹ trẻ không dạy con những điều đó nữa. Đôi lúc tôi thấy các bé cứ nói chuyện trống không, không dạ thưa, thậm chí quậy phá tung trời, mà ba mẹ các em đó vẫn cười xòa cho qua, còn khen con hiếu động là thông minh. Liệu tới 20, 30 năm nữa, Việt Nam có còn lưu giữ được các giá trị truyền thống nữa hay không?", bạn đọc Huuvinhtran trăn trở.
Cho rằng câu chuyện này bắt nguồn từ cách dạy dỗ có phần xuề xòa của các bậc cha mẹ hiện đại, độc giả Dinh Vang thẳng thắn nhận định: "Nhiều bậc phụ huynh không hiểu ý nghĩa của phong tục mừng tuổi ngày Tết, cho rằng cứ mừng tuổi cho trẻ càng nhiều tiền càng chứng tỏ mình yêu quý trẻ. Nhiều đứa trẻ chưa đến tuổi làm ra tiền, chưa hiểu và quý trọng đồng tiền, không biết đó là mồ hôi công sức lao động mà có.
Tự dưng trẻ được mừng tuổi 200 nghìn đồng, 500 nghìn đồng, thậm chí triệu bạc nên chúng sẽ có suy nghĩ là tiền rất dễ kiếm và sẽ dùng tiền mừng tuổi để tiêu xài lãng phí. Điều đó làm hỏng nhân cách của trẻ. Thiết nghĩ, mừng tuổi cho trẻ thì tối đa cũng chỉ nên 10, 20 hay tối đa 50 nghìn đồng. Chúng ta có thể bày tỏ tình yêu thương với trẻ bằng nhiều cách có ích hơn là làm hư hỏng trẻ theo cách như vậy".'
            )
        );

        DB::table('detail_post')->insert(
            array(
                'post_id' => '5',
                'content' => 'Chiều 5/1, Quốc hội thông qua nghị quyết phê chuẩn miễn nhiệm Phó thủ tướng nhiệm kỳ 2021-2026 với ông Phạm Bình Minh và Vũ Đức Đam theo nguyện vọng cá nhân.
Có 484 đại biểu tham gia, trong đó 476 đại biểu tán thành, 5 người không tán thành, 3 người không biểu quyết.
Trưa cùng ngày, Thủ tướng Phạm Minh Chính trình Quốc hội đề nghị phê chuẩn miễn nhiệm Phó thủ tướng Phạm Bình Minh và Vũ Đức Đam   
Theo Thủ tướng, tại kỳ họp thứ nhất Quốc hội khóa XV, ông Phạm Bình Minh, Ủy viên Bộ Chính trị và ông Vũ Đức Đam, Ủy viên Ban chấp hành Trung ương Đảng được Quốc hội phê chuẩn giữ chức Phó thủ tướng. Trong thời gian đảm nhiệm chức vụ, hai ông "đã có nhiều cố gắng, nỗ lực thực hiện các nhiệm vụ được Đảng, Nhà nước và nhân dân giao phó".
Người đứng đầu Chính phủ cho hay, xét nguyện vọng cá nhân, Bộ Chính trị đã đồng ý để ông Phạm Bình Minh, Ủy viên Trung ương Đảng, Ủy viên Bộ Chính trị khóa 13, Phó thủ tướng thường trực nhiệm kỳ 2021-2026 và ông Vũ Đức Đam, Ủy viên Trung ương Đảng khóa 13, Phó thủ tướng nhiệm kỳ 2021-2026 thôi giữ chức vụ lãnh đạo, nghỉ công tác và nghỉ hưu theo quy định.
Từ các căn cứ trên, Thủ tướng trình Quốc hội xem xét, phê chuẩn miễn nhiệm chức vụ Phó thủ tướng nhiệm kỳ 2021-2026 đối với hai ông Phạm Bình Minh và Vũ Đức Đam
Chính phủ nhiệm kỳ 2021-2026 có 27 thành viên, do Thủ tướng Phạm Minh Chính đứng đầu. Bốn Phó thủ tướng là các ông Phạm Bình Minh, Lê Minh Khái, Lê Văn Thành, Vũ Đức Đam. Sau khi Quốc hội phê chuẩn miễn nhiệm ông Minh và ông Đam theo nguyện vọng cá nhân, Thủ tướng sẽ trình phê chuẩn bổ nhiệm hai người thay thế.
Sáu ngày trước, Ban Chấp hành Trung ương Đảng họp bất thường, thống nhất để Phó thủ tướng thường trực Phạm Bình Minh thôi giữ chức vụ Ủy viên Bộ Chính trị, Ủy viên Trung ương Đảng khóa 13; Phó thủ tướng Vũ Đức Đam thôi Ủy viên Trung ương khóa 13
Ông Phạm Bình Minh 63 tuổi, quê Nam Định. Ông được bầu làm Ủy viên Bộ Chính trị hai khóa 12, 13; Ủy viên Trung ương Đảng bốn khóa liên tiếp từ khóa 10 đến 13 và đại biểu Quốc hội ba khóa liên tiếp từ 13 đến 15. Sự nghiệp của ông Minh gắn với ngành ngoại giao với 41 năm công tác.
Năm 1981, sau khi tốt nghiệp Đại học Ngoại giao Hà Nội, ông làm cán bộ tại Bộ Ngoại giao, sau đó là Tùy viên Đại sứ quán Việt Nam tại Anh. Học xong thạc sĩ Luật và Ngoại giao tại Đại học Fletcher (Mỹ), ông làm Vụ phó Các tổ chức quốc tế. Sau bốn năm công tác ở cơ quan đại diện Việt Nam tại Liên Hợp Quốc và Mỹ, ông về nước làm Quyền vụ trưởng, rồi Vụ trưởng Các tổ chức quốc tế, trợ lý Bộ trưởng Ngoại giao.
Tháng 8/2007, ông làm Thứ trưởng Ngoại giao và bốn năm sau làm Bộ trưởng ở tuổi 52. Ông Phạm Bình Minh có 9 năm làm Phó thủ tướng, từ tháng 11/2013 đến nay, trong đó 8 năm kiêm Bộ trưởng Ngoại giao và làm Phó thủ tướng thường trực từ tháng 9/2021.
Ông Vũ Đức Đam 59 tuổi, quê Hải Dương là phó tiến sĩ kinh tế thế giới và quan hệ kinh tế quốc tế. Ông là Ủy viên Trung ương Đảng dự khuyết khóa 10, ba khóa sau đó được bầu là Ủy viên Trung ương Đảng. Từ tháng 10/1994, ông trải qua 10 năm công tác tại Văn phòng Chính phủ với vai trò Vụ phó Quan hệ quốc tế, quyền Vụ trưởng ASEAN, rồi thư ký, trợ lý cố Thủ tướng Võ Văn Kiệt.
Tháng 3/2003, ông làm Phó chủ tịch tỉnh Bắc Ninh. Tháng 8/2005, ông giữ chức Thứ trưởng Bộ Bưu chính - Viễn thông. Từ tháng 11/2007, ông trải qua 4 năm công tác tại Quảng Ninh, giữ nhiều chức vụ như Phó bí thư, Chủ tịch tỉnh, Bí thư Tỉnh ủy. Tháng 8/2011, ông Đam về Trung ương làm Bộ trưởng, Chủ nhiệm Văn phòng Chính phủ - trở thành thành viên Chính phủ trẻ nhất khi được bổ nhiệm.
Ông làm Phó thủ tướng từ tháng 11/2013 và giữ cương vị này qua ba nhiệm kỳ liên tục. Ông cũng là Phó thủ tướng trẻ nhất trong Chính phủ Việt Nam các khóa XIII, XIV.'
            )
        );

        DB::table('detail_post')->insert(
            array(
                'post_id' => '6',
                'content' => 'Tổng thư ký NATO nhận định coi thường Nga là điều nguy hiểm khi họ sẵn sàng chấp nhận rủi ro và tổn thất lớn trong xung đột với Ukraine.
"Lực lượng Ukraine gây tổn thất nặng cho quân đội Nga. Tuy nhiên, Nga một lần nữa cho thấy họ sẵn sàng chấp nhận rủi ro lớn và chịu đựng những tổn thất nặng nề về nhân sự", Tổng thư ký NATO Jens Stoltenberg nói tại hội nghị ngày 5/1 ở Oslo, Na Uy.
"Họ đã huy động thêm 200.000 quân, ngoài ra chúng tôi biết rằng họ có thể thu thập nhiều vật tư mới. Có lẽ quan trọng nhất là chưa có dấu hiệu nào cho thấy Nga đã thay đổi mục tiêu", ông Stoltenberg cho biết, đồng thời cảnh báo "thật nguy hiểm khi coi thường Nga".
Nga chưa bình luận về nhận định của Tổng thư ký NATO.
Ông Stoltenberg đưa ra bình luận sau khi Ukraine pháo kích trường dạy nghề ở thành phố Makiivka, tỉnh Donetsk. Bộ Quốc phòng Nga thông báo 89 quân nhân thiệt mạng trong vụ tập kích, trong khi Ukraine tuyên bố tới 400 người chết.
Giới chức Nga giải thích vụ pháo kích do quân nhân sử dụng điện thoại trái với lệnh cấm, khiến đối phương theo dõi và xác định được tọa độ đóng quân. Tuy nhiên, nhiều chuyên gia quân sự thân Điện Kremlin và một số quan chức Nga cho rằng trách nhiệm lớn nhất trong thảm kịch thuộc về các sĩ quan chỉ huy.
Sau hơn 10 tháng giao tranh, chiến sự Nga - Ukraine gần đây được nhận định rơi vào bế tắc khi các bên tham chiến không đạt được những bước tiến đáng kể. Sau khi rút khỏi nhiều khu vực trước đợt phản công chớp nhoáng của Ukraine, lực lượng Nga củng cố phòng tuyến và đẩy mạnh tiến công một số đô thị như thành phố Bakhmut ở tỉnh Donetsk.
'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
