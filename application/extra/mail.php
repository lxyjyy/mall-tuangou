<?php
/**
 * 邮件服务相关配置
 */
return [
	'charset' => 'utf-8',              // 邮件编码
	'smtp_debug' => 0,                 // debug 模式。0: 关闭，1: 客户端消息，2: 客户端和服务器消息，3: 2和连接状态，4: 更详细
	'debug_output' => 'html',          // debug 输出类型。
	'host' => 'smtp.126.com',          // SMPT 服务器地址
	'port' => 465,                     // 端口号
	'smtp_auth' => true,               // 启用SMTP认证
	'smtp_secure' => 'ssl',            // 安全协议
	'username' => 'mingc2016@126.com', // SMTP 用户名
	'password' => '126mailmingc',      // SMTP 密码。126邮箱使用客户端授权码，QQ邮箱用独立密码
	'from' => 'mingc2016@126.com',     // 发件人邮箱
	'from_name' => 'mingc',            // 发件人名称
	'reply_to' => '',                  // 回复邮箱的地址。留空取发件人邮箱
	'reply_to_name' => '',             // 名称。留空取发件人名称
];