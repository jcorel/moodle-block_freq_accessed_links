# Frequently Accessed Links

<p align="center">
  <a href="" rel="noopener">
 <img width=200px height=200px src="https://moodle.org/theme/image.php/moodleorg/theme_moodleorg/1653695412/moodle_logo_small" alt="Project logo"></a>
</p>

<h3 align="center">Moodle-Block Frequently Accessed Links</h3>

<div align="center">

[![Status](https://img.shields.io/badge/status-active-success.svg)]()
[![GitHub Issues](https://img.shields.io/badge/issues-0-brightgreen)](https://github.com/eLearning-BS23/moodle-block_freq_accessed_links/issues)
[![GitHub Pull Requests](https://img.shields.io/badge/pull%20request-0-yellowgreen)](https://github.com/eLearning-BS23/moodle-block_freq_accessed_links/pulls)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](/LICENSE)

</div>

<p align="center"> Shows frequently accessed links in block plugin
    <br> 
</p>

## 🧐 About <a name = "about"></a>

Introducing the "Frequently Accessed Links" Block Plugin for Moodle – a dynamic tool that highlights frequently accessed links based on user interactions. Users are provided with a list of webpage titles they have visited, ranked by visit frequency. Clicking on these titles allows users to swiftly navigate back to the corresponding pages.

## 🏁 Getting Started <a name = "getting_started"></a>
Welcome to the installation guide for <b>requently Accessed Links</b>, block plugin. Following these instructions will enable you to obtain a copy of the project and successfully run it on your machine.

### Install by downloading the ZIP file

- Download zip file from <a target="_blank" href="https://moodle.org/plugins/block_freq_accessed_links">Moodle plugins directory</a> or <a target="_blank" href="https://github.com/eLearning-BS23/moodle-block_freq_accessed_links">GitHub</a>.

- Unzip the zip file inside blocks folder of your moodle project directory.

```
{moodle folder}/blocks/
```
 <b>or</b>
  
   - Upload the zip file in the install plugins options from site administration.

```
Site Administration ➜ Plugins ➜ Install Plugins ➜ Upload zip file
```

In your Moodle site (as admin), Visit site administration to finish the installation.

### Install using git clone

Go to moodle project directory

```
cd {moodle folder}/blocks/
```

and clone code by using following commands:
```
git clone https://github.com/eLearning-BS23/moodle-block_freq_accessed_links
```
rename the folder name as **freq_accessed_links** and refresh the site.

## ⚙️ Configuration

After installing the plugin, you will get an option in the settings page to limit number of links you want to see in your block plugin

![Settings Page](screenshots/settings_page.png)

### Settings

To update the plugin settings, navigate to plugin settings

```
Site Administration ➜ Plugins ➜ Blocks ➜ Frequently Accessed Links
```

![Location of the settings](screenshots/settings_location.png)

## 💡 How to use

### <span id='add-plugin'>Adding the block plugin</span>
 - To add the block plugin enable <b>Edit Mode</b> at dashboard.
 ![Edit mode at dashboard](screenshots/dashboard_edit_mode.png)

 - Select the block plugin named as <b>Frequently Accessed Links</b> from this list.
 ![Select Block Plugin](screenshots/select_block_plugin.png)

 - Block plugin is added successfully.
 ![Installed Block Plugin](screenshots/block_plugin_installed.png)

## FAQ’s:
1. How can I update number of links? 
  
    > Please open the settings page to update number of links. <a href="#settings">Click Here</a>
2. Why its showing 5 links when the number of links is given 0 in the settings?
    > As 0 is an invalid value that's why its working with the default value which is 5. 