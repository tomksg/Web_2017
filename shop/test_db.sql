-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 17-12-23 01:20
-- 서버 버전: 5.7.19
-- PHP 버전: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test_db`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `gunfish`
--

CREATE TABLE `gunfish` (
  `product_id` int(20) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_info` text NOT NULL,
  `product_from` text NOT NULL,
  `product_weight` float NOT NULL,
  `product_intro` text NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `gunfish`
--

INSERT INTO `gunfish` (`product_id`, `product_name`, `product_image`, `product_price`, `product_info`, `product_from`, `product_weight`, `product_intro`, `category`) VALUES
(1, '살이 탱글탱글 동해속초 반건조 양미리 (한두름) 20미', 'shop_data/01_product/1.jpg', 7500, '당해 겨울 생산! 품질보증!', '국내산(속초)', 250, '동해 속초에서 11월에 잡은 국내 자연산 양미리, 살이 통통하게 올라 담백하고 고소합니다', 1),
(2, '쫀득한 알과 부드러운 속살 반건조 알도루묵 (20cm이상) 10미', 'shop_data/01_product/2.jpg', 15000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 250, '동해안 속초에서 잡은 자연산 알도루묵, 알이 꽉차고 살이 통통하며 부드럽습니다', 1),
(4, '담백하고 고소한 반건조 우럭[조피볼락] (중25cm이상) 2미', 'shop_data/01_product/4.jpg', 15000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 350, '육질이 단단하고 식감이 좋은 담백한 맛 반건조 우럭[조피볼락]', 1),
(5, '파란별 반건조 생선 스페셜 감사 선물세트', 'shop_data/01_product/5.jpg', 30000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 700, '고마운 분께 감사의 마음을 전하세요. 조금은 특별하고, 그렇지만 부담없는 신선한 선물세트! 반건조 선물세트를 추천합니다.', 1),
(6, '햇오징어로 건조한 고급 반건조 오징어 (1kg내외) 10미', 'shop_data/01_product/6.jpg', 35000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 1000, '올해 잡은 반건조 햇오징어, 부드럽고 식감이 좋아 어린이 간식으로 의뜸, 짭잘하고 고소한 맛! 술안주로 최고!', 1),
(7, '강원도 깔끔이 반건조 코다리 (중39cm이상) 4미', 'shop_data/01_product/7.jpg', 11000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 500, '육질이 부드럽고 쫄깃하며 구수한 맛이 일품, 바다내음 가득한 속초 반건조 코다리', 1),
(8, '강원도 깔끔이 반건조 코다리 (특대45cm이상) 4미', 'shop_data/01_product/8.jpg', 16000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 800, '육질이 부드럽고 쫄깃하며 구수한 맛이 일품, 바다내음 가득한 속초 반건조 코다리', 1),
(9, '동해안 제철 햇마른오징어(1축 1.5kg) 5미', 'shop_data/01_product/9.jpg', 16800, '당해 겨울 생산! 품질보증!', '국내산(속초)', 1500, '동해에서 올해 잡은 햇오징어로 육질이 두텁고 부드러우며, 짜지않고 고소합니다', 2),
(10, '동해안 제철 햇마른오징어(1축 2.0kg) 5미', 'shop_data/01_product/10.jpg', 19800, '당해 겨울 생산! 품질보증!', '국내산(속초)', 2000, '동해에서 올해 잡은 햇오징어로 육질이 두텁고 부드러우며, 짜지않고 고소합니다', 2),
(11, '국내자연건조 최고급 황태채 200g', 'shop_data/01_product/11.jpg', 12000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 200, '인제군 용대리에서 추운 겨울에 강한 바람과 큰 일교차로 신선하고 맛있게 건조된 황태채입니다.', 2),
(12, '청정바람으로 건조한 황태채 300g', 'shop_data/01_product/12.jpg', 11500, '당해 겨울 생산! 품질보증!', '러시아(중국건조)', 300, '러시아에서 잡은 명태를 백두산 청정바람으로 건조한 신선하고 맛있는 황태채입니다', 2),
(13, '속살이 부드러운 속초 먹태 (47cm이상) 5미', 'shop_data/01_product/13.jpg', 25000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 880, '속초에서 직접 건조한 먹태, 속살이 푹신푹신 보들보들한 먹태는 살짝 구워서 양념소스와 함께 먹으면 안주로 최고입니다.', 2),
(14, '햇오징어로 건조한 고급 반건조 오징어 (1kg내외) 10미', 'shop_data/01_product/14.jpg', 35000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 1000, '올해 잡은 반건조 햇오징어, 부드럽고 식감이 좋아 어린이 간식으로 의뜸, 짭잘하고 고소한 맛! 술안주로 최고!', 2),
(15, '맥주와 환상궁합 고급 오징어육포 (270g)', 'shop_data/01_product/15.jpg', 13000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 270, '오징어살을 갈아서 눌러 만든 오징어육포, 달달하면서도 매콤하고 짭쪼름한 맛, 바로 드셔도 좋고 전자레인지에 20초만 돌려도 맛이 좋습니다', 2),
(16, '살이 두꺼운 고급 순살 조미아귀포 10미 (300g)', 'shop_data/01_product/16.jpg', 15000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 300, '뼈와 꼬리를 제거하고 아귀 통째로 순살로만 가공하였습니다. 도툼한 살과 쫀득쫀득하고 담백한 맛이 일품입니다.', 2),
(17, '살이 탱글탱글 동해속초 반건조 양미리 (한두름) 20미', 'shop_data/01_product/17.jpg', 7500, '당해 겨울 생산! 품질보증!', '국내산(속초)', 250, '동해 속초에서 11월에 잡은 국내 자연산 양미리, 살이 통통하게 올라 담백하고 고소합니다', 3),
(18, '쫀득한 알과 부드러운 속살 반건조 알도루묵 (20cm이상) 10미', 'shop_data/01_product/18.jpg', 15000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 250, '동해안 속초에서 잡은 자연산 알도루묵, 알이 꽉차고 살이 통통하며 부드럽습니다', 3),
(19, '고소한 자연산 반건조 물가자미[기름가자미] (중24cm이상) 5미', 'shop_data/01_product/19.jpg', 22000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 550, '동해안 청정바다에서 잡은 자연산 물가자미 살이 부드러우면서도 쫄깃한 식감과 고소한 맛이 뛰어납니다', 3),
(20, '담백하고 고소한 반건조 우럭[조피볼락] (중25cm이상) 2미', 'shop_data/01_product/20.jpg', 15000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 350, '육질이 단단하고 식감이 좋은 담백한 맛 반건조 우럭[조피볼락]', 3),
(21, '파란별 반건조 생선 스페셜 감사 선물세트', 'shop_data/01_product/21.jpg', 30000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 700, '고마운 분께 감사의 마음을 전하세요. 조금은 특별하고, 그렇지만 부담없는 신선한 선물세트! 반건조 선물세트를 추천합니다.', 3),
(22, '햇오징어로 건조한 고급 반건조 오징어 (1kg내외) 10미', 'shop_data/01_product/22.jpg', 35000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 1000, '올해 잡은 반건조 햇오징어, 부드럽고 식감이 좋아 어린이 간식으로 의뜸, 짭잘하고 고소한 맛! 술안주로 최고!', 3),
(23, '강원도 깔끔이 반건조 코다리 (중39cm이상) 4미', 'shop_data/01_product/23.jpg', 11000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 500, '육질이 부드럽고 쫄깃하며 구수한 맛이 일품, 바다내음 가득한 속초 반건조 코다리', 3),
(24, '강원도 깔끔이 반건조 코다리 (특대45cm이상) 4미', 'shop_data/01_product/24.jpg', 16000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 800, '육질이 부드럽고 쫄깃하며 구수한 맛이 일품, 바다내음 가득한 속초 반건조 코다리', 3),
(25, '살이 탱글탱글 동해속초 반건조 양미리 (한두름) 20미', 'shop_data/01_product/25.jpg', 7500, '당해 겨울 생산! 품질보증!', '국내산(속초)', 250, '동해 속초에서 11월에 잡은 국내 자연산 양미리, 살이 통통하게 올라 담백하고 고소합니다', 4),
(26, '쫀득한 알과 부드러운 속살 반건조 알도루묵 (20cm이상) 10미', 'shop_data/01_product/26.jpg', 15000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 250, '동해안 속초에서 잡은 자연산 알도루묵, 알이 꽉차고 살이 통통하며 부드럽습니다', 4),
(27, '고소한 자연산 반건조 물가자미[기름가자미] (중24cm이상) 5미', 'shop_data/01_product/27.jpg', 22000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 550, '동해안 청정바다에서 잡은 자연산 물가자미 살이 부드러우면서도 쫄깃한 식감과 고소한 맛이 뛰어납니다.', 4),
(29, '파란별 반건조 생선 스페셜 감사 선물세트', 'shop_data/01_product/29.jpg', 30000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 700, '고마운 분께 감사의 마음을 전하세요. 조금은 특별하고, 그렇지만 부담없는 신선한 선물세트! 반건조 선물세트를 추천합니다.', 4),
(30, '햇오징어로 건조한 고급 반건조 오징어 (1kg내외) 10미', 'shop_data/01_product/30.jpg', 35000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 1000, '올해 잡은 반건조 햇오징어, 부드럽고 식감이 좋아 어린이 간식으로 의뜸, 짭잘하고 고소한 맛! 술안주로 최고!', 4),
(31, '강원도 깔끔이 반건조 코다리 (중39cm이상) 4미', 'shop_data/01_product/31.jpg', 11000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 500, '육질이 부드럽고 쫄깃하며 구수한 맛이 일품, 바다내음 가득한 속초 반건조 코다리', 4),
(32, '강원도 깔끔이 반건조 코다리 (특대45cm이상) 4미', 'shop_data/01_product/32.jpg', 16000, '당해 겨울 생산! 품질보증!', '국내산(속초)', 800, '육질이 부드럽고 쫄깃하며 구수한 맛이 일품, 바다내음 가득한 속초 반건조 코다리', 4);

-- --------------------------------------------------------

--
-- 테이블 구조 `main`
--

CREATE TABLE `main` (
  `image` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `main`
--

INSERT INTO `main` (`image`, `number`, `description`) VALUES
('shop_data/00_index/20171221113830.jpg', 1, '안녕하십니까? 저희 가게는 1996년에 개업하여 오랫동안 건어물만을 전문으로 해온 상회입니다. \r\n언제나 최선의 품질을 약속드리는 건어물집이 되겠습니다.                            ');

-- --------------------------------------------------------

--
-- 테이블 구조 `marryme`
--

CREATE TABLE `marryme` (
  `id` varchar(20) NOT NULL,
  `pw` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `marryme`
--

INSERT INTO `marryme` (`id`, `pw`) VALUES
('admin', 123);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
