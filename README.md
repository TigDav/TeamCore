# TeamCore

___
![MIT license](https://img.shields.io/badge/license-MIT-brightgreen)
![Latest Stable Version](https://img.shields.io/badge/stable-v1.1-%2328a3df)
![PHP Version Require](https://img.shields.io/badge/php-%5E7.4-%23787CB5)
![TeamCore](/logo.png)

[English](#english)  
[Русский](#русский)

# English

___

### Introduction

___
__TeamCore is a heavily modified fork of [GenisysPro](https://github.com/GenisysPro/GenisysPro), serving as advanced
server software designed for Minecraft Pocket Edition and Minecraft Windows 10 Edition. It encompasses a wide array of
changes, addressing everything from bug fixes to fortified security measures and optimized performance improvements.__
The development of TeamCore was completed back in 2019.

###     

### About Some Changes

___

- Fixes have been added for various attacks using core vulnerabilities (sending broken packets, packets with excessive
  weight, etc.).
    - Temporary blocking has also been implemented for attempts to execute these attacks.
- Different levels of protection against bots for spam, crashes, and advertising have been added.
- A bug with flying drops on carpets has been fixed. It behaves the same as on regular blocks.
- Improved performance.
    - This core was used in a project with full survival and SkyWars with multiple worlds on one server. With this
      configuration, it maintained 20 TPS with an online player count of 100+.
    - Memory leak issues have been addressed. The option to set limits remains available. (Specify the desired values in
      the `pocketmine.yml` file)
- Anti-cheat bugs have been resolved.
    - Including the one where attempting to build quickly caused blocks to disappear and players to fall.
- A bug with shadows has been fixed.
    - There is no need to grant night vision effects for their correct display.
- A bug causing shaking screens after death has been added.
- Proper saving of the player's exit location has been added.
    - Falling into a pit upon rejoining has been fixed.
- World loading and chunk generation have been rewritten (including bugs when using multiple worlds).
    - Infinite landscape generation, which appeared in some cases upon rejoining, has been fixed.
- Proper display of flying texts has been added, and a bug with their disappearance after a certain time (also when
  clearing drops) has been fixed.
    - Adequate spawning of flying entities (entities) alongside texts has been added.
- Skin display has been fixed.
    - Including the bug with transparent and black skins.
- Timing functionality has been fixed. To identify plugins that exert the most load on the server, you can record and
  analyze them.
    - If you need to save the timings file in a custom file, use the command `/timings paste` with the
      code `pocketmine\event\TimingsHandler::printTimings(fopen("PATH/TO/TIMINGS/FILE_NAME.txt", "a+b"));`

#### Only some of the features of this core are listed here. The remaining ones can be reviewed in the code, accompanied by comments added for convenience in certain locations.

___

You can also explore the project [TeamKind](https://tigdav.ru/project/?name=TeamKind) where this core was utilized to
draw conclusions about the capabilities it provides. _(Information is available only in Russian)_
___

# Русский

___

### Введение

___
__TeamCore - это почти полностью модифицированный форк [GenisysPro](https://github.com/GenisysPro/GenisysPro),
представляющий собой продвинутое серверное программное обеспечение, разработанное для Minecraft Pocket Edition и
Minecraft Windows 10 Edition. Оно охватывает широкий спектр изменений, включая исправление ошибок, усиление мер
безопасности и оптимизацию производительности.__
Разработка TeamCore завершилась еще в 2019 году
___

### О некоторых изменениях

___

- Добавлены фиксы от многих атак с использованием багов ядра (отправка сломанных пакетов, пакетов с большим весом и
  т.д.).
    - Также добавлена временная блокировка при попытках их осуществить.
- Добавлена разного уровня защита от ботов для спама, краша и рекламы.
- Исправлен баг с летающим дропом на коврах. Он ведет себя также, как и на обычных блоках.
- Повышена производительность.
    - Данное ядро использовалось в том числе на проекте с полноценными выживанием и SkyWars со многими мирами на одном
      сервере. С таким раскладом при онлайне 100+ TPS составлял 20.
    - Исправлены проблемы с утечкой памяти. Возможность установки лимитов оставлена. (Укажите нужные значения в
      файле `pocketmine.yml`)
- Исправлены баги с анти читом.
    - В том числе тот из-за которого при попытке быстро построиться блоки начинали пропадать и игрок падал.
- Исправлен баг с тенями.
    - Необходимости выдавать эффект ночного зрения для их корректного отображения нет.
- Исправлен баг с трясущемся экраном после смерти.
- Добавлено корректное сохранение места выхода игрока.
    - Исправлено проваливание в пропасть при перезаходе.
- Переписана загрузка миров и генерация чанков (в том числе баги при использовании нескольких миров).
    - Исправлена бесконечная генерация ландшафта, которая появлялась в некоторых случаях при перезаходе.
- Добавлено корректное отображение летающих текстов, исправлен баг с их исчезновением через некоторое время (также при
  очистке дропа).
    - Добавлена возможность адекватного спавна летающих предметов (сущностей) на ряду с текстами.
- Исправлено отображение скинов.
    - В том числе баг с прозрачными и черными скинами.
- Исправлена работа таймингов. Для выявления плагинов, которые больше всего нагружают сервер, Вы можете их записывать и
  анализировать.
    - Если Вам потребуется сохранить файл с таймингами в произвольном файле, используйте вместо команды `/timings paste`
      код `pocketmine\event\TimingsHandler::printTimings(fopen("PATH/TO/TIMINGS/FILE_NAME.txt", "a+b"));`

#### Тут перечислена лишь часть особенностей данного ядра. С остальными Вы можете ознакомиться в коде, для удобства в некоторых местах добавлены комментарии.

___

Также Вы можете ознакомиться с проектом серверов [TeamKind](https://tigdav.ru/project/?name=TeamKind), где
использовалось это ядро, чтобы сделать выводы о тех возможностях, которые он предоставляет.