<?php
==============================================================裂变红包入口接口==========================================================
1、接口调用地址：https://testing-h5.yongche.org/ajax/Rechargerebate/complete
   参数：{"transaction_id":"112","activity_id":"1053","project_id":"255"}

   注意：
      接口地址发生了改变；
      增加了"entry_"开头的几个字段返回信息；

2、cookie：
   名称：_app_token_v3
   值：SBx_lefOicGRkzbqjcTZAEQUBF-WTGHGRlCg1DH5nJA


3、接口返回样例：
{
  "code": 200,
  "result": {
    "recharge_amount": 0.01,
    "results_page": {
      "is_pop": "0",
      "resultPic": "https:\/\/i1-testing.yongche.org\/media\/g2\/M00\/02\/35\/CgALF1qPxD6AW4l4AABVvt2vR9Q996.jpg",
      "button1": {
        "type": "pic",
        "openType": "h5url",
        "pic": "https:\/\/i1-testing.yongche.org\/media\/g2\/M00\/02\/35\/CgAL21qPxEOAd8TSAABOBA4AdPs278.jpg",
        "h5url": "https:\/\/www.yongche.com"
      },
      "button2": {
        "type": "text",
        "openType": "h5url",
        "doc": "用车卡",
        "h5url": "https:\/\/www.yongche.com"
      },
      "red_packets": {                  #该值为空(返回空的对象)，则不展示入口，有值则展示入口。
        "type": "text",
        "doc": "哈哈哈",
        "openType": "share",
        "shareTitle": "订单结束",
        "subTitle": "分享有红包",
        "icon": "http:\/\/i3-testing.yongche.org\/media\/g2\/M00\/0B\/37\/CgAL21t72B-AHIyUAABgmzBv9-c357.png",
        "shareUrl": "https:\/\/www.sina.com?source=2&order_id=112&zt=lybr25fif3tg04gw",
        "redStatUrl": "https:\/\/testing.red-packets.yongche.org\/v1\/hongbao\/share?source=2&order_id=112&zt=lybr25fif3tg04gw",
        "entry_icon": "g2\/M00\/0B\/37\/CgALF1t72A2AVqrJAAAovFCZZVM020.png",   #入口icon
        "entry_title": "哈哈哈",     #入口主标题
        "entry_subtitle": "",       #入口副标题
        "entry_sharebtn": ""        #分享button
      }
    }
  }
}



==============================================================申请红包接口==========================================================
1、“领取红包”接口调用地址：http://testing.red-packets.yongche.org/V2/hongbao/Apply
   参数：{"act_id":"236","city":"bj","package_id":"67","order_id":"6593174083516534772","tel":"15911122563","source":"1"}

   注意：
      接口地址发生了改变；
      增加city定位城市的字段；
      返回字段data内容发生了改变，可能会返回多条数据(以前只返回一条)；每条数据中的coupon字段，现在也可能返回多条数据。
   


2、接口返回样例：
  {
  "code": "000000",
  "msg": "success",
  "data": [{
    "user_tel": "15911122563",
    "order_id": "6593174083516534772",
    "activity_id": "236",
    "package_id": "67",
    "create_time": "1535891907",
    "update_time": "1535891907",
    "coupon": [{
      "coupon_id": 7094,
      "coupon_type": 2,
      "coupon_name": "2018年08月中信专属用车券",
      "start_time": 1533772803,
      "end_time": 1535731199,
      "expiry_time": 1535731199,
      "coupon_amount": 5,
      "mode": 4,
      "business_type": "zhuanche",
      "facevalue": 5,
      "limit_field": "",
      "limit_amount": "0",
      "receive_time": 1535891908,
      "coupon_desc": "<dfn>5<\/dfn>元",
      "flag": 48,
      "web_desc": {
        "适用用户": "通用",
        "适用服务": "通用",
        "适用车型": "通用",
        "适用城市": "通用",
        "适用渠道": "通用",
        "有效期": "有效期至2018年08月31日"
      },
      "desc": "1. 有效期至2018年08月31日 ",
      "app_desc": ["有效期至2018年08月31日"],
      "car_type": "",
      "city_list": ""
    }]
  }, {
    "user_tel": "15911122563",
    "order_id": "6593174083516534772",
    "activity_id": "236",
    "package_id": "67",
    "create_time": "1535891907",
    "update_time": "1535891907",
    "coupon": [{
      "coupon_id": 7324,
      "coupon_type": 2,
      "coupon_name": "2018年08月中信专属用车券",
      "start_time": 1535673604,
      "end_time": 1535731199,
      "expiry_time": 1535731199,
      "coupon_amount": 10,
      "mode": 4,
      "business_type": "zhuanche",
      "facevalue": 10,
      "limit_field": "",
      "limit_amount": "0",
      "receive_time": 1535891908,
      "coupon_desc": "<dfn>10<\/dfn>元",
      "flag": 48,
      "web_desc": {
        "适用用户": "通用",
        "适用服务": "通用",
        "适用车型": "通用",
        "适用城市": "通用",
        "适用渠道": "通用",
        "有效期": "有效期至2018年08月31日"
      },
      "desc": "1. 有效期至2018年08月31日 ",
      "app_desc": ["有效期至2018年08月31日"],
      "car_type": "",
      "city_list": ""
    }]
  }]
}



==============================================================根据订单号获取红包领取人员列表======================================================
1、“领取红包”接口调用地址：http://testing.red-packets.yongche.org/V2/hongbao/UserList
   参数：{"order_id":"6593174083516534772","tel":"15911122563","source":"1","tel":"15911122563"}

   注意：
      接口地址发生了改变；

2、接口返回样例：
{
  "code": "000000",
  "msg": "success",
  "data": {
    "count": "2",
    "list": [{
      "id": "160",
      "user_name": "159******63",
      "order_id": "6593174083516534772",
      "activity_id": "236",
      "coupon_amount": "0",
      "is_max": 0,
      "head_image": "",
      "h5_greetings_msg": "1212"
    }, {
      "id": "159",
      "user_name": "159******63",
      "order_id": "6593174083516534772",
      "activity_id": "236",
      "coupon_amount": "0",
      "is_max": 0,
      "head_image": "",
      "h5_greetings_msg": "1212"
    }]
  }
}


==============================================================获取分享数据、分享数据的录入、多个渠道进行分享==========================================
1、分享数据接口：http://testing.red-packets.yongche.Org/V2/hongbao/share
   参数：{"order_id":"112","source":"2","zt":"26054243"}

   注意：
      接口地址发生了改变；
      增加了"entry_"开头的几个字段返回信息；

2、接口返回样例：
{
  "code": "000000",
  "msg": "success",
  "data": {
    "act_id": "234",
    "act_title": "订单结束",
    "bonus_client_poppic": "http:\/\/i3-testing.yongche.org\/media\/g2\/M00\/0B\/37\/CgALF1t72BmAJnJlAADtAct1xyY334.JPG",
    "bonus_enter_pic": "http:\/\/i3-testing.yongche.org\/media\/g2\/M00\/0B\/37\/CgALF1t72A2AVqrJAAAovFCZZVM020.png",
    "entry_icon": "http:\/\/i3-testing.yongche.org\/media\/g2\/M00\/0B\/37\/CgALF1t72A2AVqrJAAAovFCZZVM020.png",    #入口icon
    "entry_sharebtn": "",   #分享button
    "entry_subtitle": "",   #入口副标题
    "entry_title": "哈哈哈", #入口主标题
    "h5_appease_msg": "不要灰心",
    "h5_greetings_msg": "[\"\恭\喜\发\财\"]",
    "h5_pic": "http:\/\/i3-testing.yongche.org\/media\/g2\/M00\/0B\/37\/CgAL21t72CuAZ8aoAAFywMgBmXg025.jpg",
    "h5_rule": "策策策测额策策策测测测测",
    "h5_success_msg": "恭喜",
    "head_image": "",
    "nickname": "沐子",
    "package_amount": 10,
    "package_id": "58",
    "pop_desc": "非常好",
    "pop_pic": "http:\/\/i3-testing.yongche.org\/media\/g2\/M00\/0B\/37\/CgALF1t72CWANdwvAAFPLObewis417.jpg",
    "pop_title": "哈哈哈",
    "share_client_url": "https:\/\/www.sina.com",
    "share_desc": "分享有红包",
    "share_h5_url": "https:\/\/www.baidu.com?order_id=112",
    "share_list": "1,2,3,4",
    "share_pic": "http:\/\/i3-testing.yongche.org\/media\/g2\/M00\/0B\/37\/CgAL21t72B-AHIyUAABgmzBv9-c357.png",
    "share_title": "订单结束",
    "share_url": "https:\/\/www.baidu.com",
    "source": "1",
    "status": 1,
    "zt": "lybr25fif3tg04gw"
  }
}











?>