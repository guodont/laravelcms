#Changelog

## 7.0.8 (2016-07-19)
### 增加
* demo
* https url 支持
* deleteAfterDays 策略
* 添加图片处理链接统一拼接方法 by @SherlockRen

## 7.0.7 (2016-01-12)
### 修正
* PersistentFop参数pipeline和notify_url失效
* resume 模式 close file inputstream

## 7.0.6 (2015-12-05)
### 修正
* php7.0 Json 对空字符串解析单元测试报错
* 开启安全模式或者设置可操作目录树时，设置CURLOPT_FOLLOWLOCATION报错, by @twocabbages
* fetch 支持不指定key, by @sinkcup

## 7.0.5 (2015-10-29)
### 增加
* 增加上传策略最小文件大小限制 fsizeMin
* 增加常见examples

## 7.0.4 (2015-07-23)
### 修正
* 一些地方的严格比较检查
* resumeupload 备用地址失效

## 7.0.3 (2015-07-10)
### 修改
* 多zone 支持

## 7.0.2 (2015-04-18)
### 修改
* fetch 接口返回内容调整
* pfop 接口调整

###修正
* exception 类调用

## 7.0.1 (2015-03-27)
### 增加
* 增加代码注释

## 7.0.0 (2015-02-03)

### 增加
* 简化上传接口
* 自动选择断点续上传还是直传
* 重构代码，接口和内部结构更清晰
* 改变mime
* 代码覆盖度报告
* policy改为array, 便于灵活增加，并加入过期字段检查
* 文件列表支持目录形式
* 利用元编程方式支持 fop 和 pfop