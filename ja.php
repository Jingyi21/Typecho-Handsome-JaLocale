<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 * ja.php
 * Author     : Miya
 * Date       : 2018/8/25
 * Version    : 0.91
 * Description: Japanese Locale in Handsome Theme
 */
class Usr_Lang_ja extends Lang {

    /**
     * @return string 返回语言名称
     */
    public function name() {
        return "日本語(beta)";
    }


    /**
     * @return array 返回包含翻译文本的数组
     */
    public function translated() {
        return array(
            // 左侧边栏
            '首页' => 'ホーム',
            '分类' => 'カテゴリー',
            '页面' => 'ページ',
            '友链' => 'リンク集',
            '早上好，永远年轻，永远热泪盈眶' => 'おはようございます',
            '下午好，是时候打个盹了' => 'こんにちは〜ごゆっくり',
            '晚上好，注意早点休息' => 'こんばんは〜',
            '早上好，' => 'おはよう，',
            '中午好，' => 'こんにちは，',
            '晚上好，' => 'こんばんは，',
            '输入关键词搜索…' => '記事検索',
            '文章RSS' => 'ブログRSS',
            '评论RSS' => 'コメントRSS',
            '后台管理' => '各種設定',
            '导航' => 'ナビゲーション',
            '组成' => 'カテゴリー',
            '设置' => '設置',
            '重置' => 'リセット',
            '固定头部' => '固定頭部',
            '固定导航' => '固定ナビゲーション',
            '折叠导航' => '折疊ナビゲーション',
            '置顶导航' => 'トップナビゲーション',
            '盒子模型' => 'ボックス模型',
            '恢复默认值' => 'デフォルト',
            '用户名' => 'ユーザーネーム',
            '密码' => 'パスワード',
            '登录中' => 'ログイン中',
            // 右侧边栏
            '热门文章' => '人気記事',
            '博客信息' => 'このブログについて',
            '文章数目' => '記事数',
            '评论数目' => 'コメント数',
            '运行天数' => '稼動天数',
            '最后更新' => '最後更新',
            '最新评论' => '最新コメント',
            '随机文章' => 'ランダム',
            '标签云' => 'タグ',
            /*评论 Comments*/
            '暂无评论' => 'コメントなし',
            '1 条评论' => '1 コメント',
            '%d 条评论' => '%d コメント',
            '条评论' => '件コメント',
            '阅读: %d' => '表示数: %d',
            '次浏览' => '次表示',
            '必须填写昵称或姓名' => 'ニックネームや名前は必要です',
            '必须填写电子邮箱地址' => 'Eメールは必要です',
            '邮箱地址不合法' => 'Eメールが正しくありません',
            '必须填写评论内容' => 'コメントを入力してください',
            '提交失败，请重试！' => '素晴らしく運がないな、君は',
            '提交失败,您的输入内容不符合规则！' => '素晴らしく運がないな、君は',
            '在这里输入你的评论...（Ctrl/Control + Enter 快捷提交）' => 'コメントください（Ctrl/Control + Enter 送信）',
            '发表评论' => 'コメントする',
            '评论' => 'コメント',
            '欢迎' => 'おかえりなさい、',
            '归来' => ' ',
            '名称' => 'お名前',
            '邮箱' => 'Eメール',
            '网址' => 'ホームページ',
            '姓名或昵称' => 'ニックネーム',
            '网站或博客' => 'ウェブサイト',
            '提交中' => '送信中',
            '此处评论已关闭' => 'コメント禁止しました',
            '说点什么吧……' => 'いまどうしてる？',
            '评论通知'=> 'コメント通知',
            '登录通知' => 'ログイン通知',
            // 文章页
            '说点什么吧' => '何を話します',
            '私密评论' => '秘密コメント',
            // 时光机
            '时光机' => 'タイムマシン',
            '发表新鲜事' => '発表する',
            // 归档
            '归档' => 'アーカイブ',
            /* 时光机页面 */
            '我的动态' => 'アクティブ',
            '联系方式' => 'コンテンツ',
            '外观设置——输入email地址' => 'カスタマイズ——メールアドレス',
            '外观设置——输入QQ号码' => 'カスタマイズ——QQ番号',
            '外观设置——输入微博ID' => 'カスタマイズ——ウェイボーID',
            '外观设置——输入网易云音乐ID' => 'カスタマイズ——NetEase Music ID',
            '网易云音乐' => 'NetEase Music',
            '关于我' => '管理者プロフィール',
            'Y 年 m 月 d 日 h 时 i 分 A' => 'Y 年 m 月 d 日 h 時 i 分 A',
            '作者' => '作者',
            '返回首页' => 'ホームへ',
            '没有找到搜索结果，请尝试更换关键词。' => 'あれ？何もありませんね',
            '正文' => "正文",
            '欢迎你来到「时光机」栏目。在这里你可以记录你的日常和心情。而且，首页的“闲言碎语”栏目会显示最新的三条动态哦！这是默认的第一条说说，当你发布第一条说说的时候，该条动态会自动消失。' => 'タイムマシンへようこそ、こちらはデフォルトコメントです',
            '分享到' => 'シェア',
            'QQ空间' => 'QQゾーン',
            '微博' => 'ウェイボー',
            '用户名或电子邮箱' => 'ユーザーネームとEメール',
            '地址' => 'アドレス',
            '邮箱 (必填,将保密)' => 'メール (必須)',
            '表情' => '絵文字',
            // 日期格式化'
            '%d 年前'   => '%d 年前',
            '%d 个月前' => '%d 月前',
            '%d 天前'   => '%d 天前',
            '%d 小时前' => '%d 時間前',
            '%d 分钟前' => '%d 分前',
            '%d 秒前'   => '%d 秒前',
            '1 年前'   => '1 年前',
            '1 个月前' => '1 月前',
            '1 天前'   => '1 天前',
            '1 小时前' => '1 時間前',
            '1 分钟前' => '1 分前',
            '1 秒前'   => '1 秒前',
            '刚刚' => 'ただ今',
            /*文章页面 post/page.php */
            /*
            '如果觉得我的文章对你有用，请随意赞赏' => '如果覺得我的文章對你有用，請隨意讚賞',
            */
            '最后修改时间为' => '最後更新時間は',
            '著作权归作者所有' => '著作権は権利者様側へ帰属しております',
            '转载请联系作者获得授权，并注明转载地址' => '無断転載は禁止です',
            /*
            '赞赏作者' => '',
            '赞赏' => '',
            '扫一扫支付' => '',
            */
            '上一篇' => '上一篇',
            '下一篇' => '下一篇',
            '评论审核中' => 'コマンドレビュー中',
            '空白占位符' => '佔位符',
            '图片占位符' => '画像佔位符',
            '分类 %s 下的文章' => '分類 %s の投稿',
            '包含关键字 %s 的文章' => ' %s 含むの投稿',
            '标签 %s 下的文章' => 'タグ %s 含むの投稿',
            '%s 发布的文章' =>'%s さんの投稿',
            /*
            '此处内容需要评论回复后方可阅读。' => ' ',
            */
            /*登录退出提交 */
            '必须填写用户名' => 'IDは入力してください',
            '请填写密码' => 'パスワード入力してください',
            '登录失败，请重新登录' => 'ログイン失敗，リトライしてください',
            '用户名或者密码错误，请重试' => 'IDまたはパスワードが正しくありません，リトライしてください',
            '登录成功' => 'ログイン成功',
            '退出成功，正在刷新当前页面' => 'ログアウト成功',
            '退出失败，请重试' => 'ログアウト失敗，リトライしてください',
            '退出成功' => 'ログアウト成功',
            '密码错误，请重试' => 'パスワードが正しくありません，リトライしてください',
            /*其他 */
            '返回顶部' => 'トップへ',
            '作者' => '作者',
            '用户' => '用戶',
            /*独立页面*/
            '好! 目前共计 %d 篇日志。 继续努力。' => 'よし! 今の記事数は %d です。もっと頑張りますね。'
        );
    }

    public function dateFormat() {
        return "Y年 m月 d日";
    }

}