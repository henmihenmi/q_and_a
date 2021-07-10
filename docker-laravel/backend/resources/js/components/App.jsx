import React from "react";
import ReactDOM from "react-dom";
import classes from "./App.module.css";

const App = () => {
    return (
        <div className={classes.container}>
            <header className={classes.header_container}>
                <h1 className={classes.title_log}>Q&A</h1>
                <div className={classes.seach}>
                    <input
                        type="search"
                        name="search"
                        placeholder="キーワードで検索"
                    />
                    <input type="submit" name="submit" value="検索" />
                </div>
                <ul className={classes.header_menu}>
                    <li>
                        <a href="#">質問する</a>
                    </li>
                    <li>
                        <a href="#">ランダムに質問を表示</a>
                    </li>
                    <li>
                        <a href="#">マイページ</a>
                    </li>
                </ul>
            </header>
            <main className={classes.main_container}>
                <div className={classes.main_contents}>
                    <div className={classes.q_and_a_box}>
                        <div className={classes.question_box}>
                            <h5>質問：</h5>
                            <div>「地球は青かった」と言ったのは誰ですか？</div>
                        </div>
                        <div className={classes.answer_box}>
                            <h5>回答：</h5>
                            <div>ユーリ・ガガーリンです。</div>
                        </div>
                    </div>
                </div>
            </main>
            <footer>
                <p>
                    <small>©2021 - Kentaro Henmmi</small>
                </p>
            </footer>
        </div>
    );
};

if (document.getElementById("app")) {
    ReactDOM.render(<App />, document.getElementById("app"));
}
