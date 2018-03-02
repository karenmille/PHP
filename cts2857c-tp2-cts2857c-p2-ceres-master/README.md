# CTS2857C - Team Project

1. Instructions
2. Steps to make changes
3. Requirements
4. Issues
5. Discussions

## Instructions

After joining and then cloning the remote repository from GitHub to a local repository for this team project, complete the following steps:

1. Each team member is to set their user name and email using the `git config` command. Check that the correct username and email is set using the `git config -l` command. This needs to be done every time the remote repository is cloned to a local repository.
1. One team member must create a branch named `develop` off the master branch and push the branch to the remote repository. Creation of files for the team project cannot start until the `develop` branch has been pushed to the remote repository.
1. Each team member must contribute PHP code to the team project. It is the responsibility of all team members to ensure that other team members contribute PHP code to the team project.

## Steps to make changes

1. Check that the correct username and email is set using the `git config -l` command.
1. Checkout the `develop` branch and execute a `git pull` to get the latest code from the remote repository.
1. Create a new branch and checkout the new branch.
1. Add, modify and/or delete a file(s).
1. When a team member completes their changes:
    1. test the changes
    1. add the file(s) to the staging area
    1. commit the changes
    1. checkout the `develop` branch
    1. execute a `git pull` to get the latest code from the remote repository
    1. merge the changes to the `develop` branch from the new branch previously created
        1. resolve merge conflicts if there are any
        1. add the file(s) fixed from the merge conflict to the staging area
        1. commit the fixed file(s)
        1. test that the code still works after the merge conflict is fixed
    1. push the `develop` branch to the remote repository
    1. create a pull request on the remote repository (GitHub) from the `develop` branch to the `master` branch.
    1. request that a fellow team member review the pull request and merge to the master branch on the remote repository
1. Delete the branch previously created for coding the changes from the local repository.

Repeat these steps each time changes are to be made. **NOTE**: Ensure that a `git pull` is regularly executed while checked out on the `develop` branch to get any changes team mates have pushed to the develop branch.

## Requirements

The following requirements must be completed:

1. Before any team member starts writing HTML, CSS, JavaScript or PHP code, create GitHub Issues indicating which team member must complete the projects' different requirements.
1. GitHub **Issues** and **Discussions** must be used to communicate with team members. External emails, texts or other communications will not be accepted for grading purposes.
1. See the **Team Project Instructions** page in D2L for the programming requirements.
1. Ensure that all changes made for the team project are on the `master` branch.
1. Once all requirements are met, one team member is to download the `master` branch of the remote repository (GitHub) and submit it before the due date and time to the `Team Project` dropbox in D2L. **Note**: The correct filename will have the repository name followed by `-master.zip`. Any team member can submit the team project. Multiple submissions to the dropbox are allowed by any team member and multiple team members can each submit to the dropbox. The last submission before the due date and time will be graded.

## Issues

### Open an Issue

1. In the repository, select the `Issues` tab.
2. Choose `New issue`.
3. Enter a `Title` for the image.
4. Enter details in the `Write` tab. Use the `@` symbol in the comment to bring up a list of team members so that the issue can refer a team member or all members of the team.
5. Choose `Submit new issue`.

### Assign an Issue

1. In the repository, select the `Issues` tab.
2. Select the issue that needs to be assigned to one or more team members.
3. Choose the `Assignees` option.
4. Select up to 10 team members to add to the issue.

### Filter issues assigned to you

1. In the repository, select the `Issues` tab.
2. Choose the `Assignee` drop down.
3. Select your username from the list.

### Close an Issue

1. In the repository, select the `Issues` tab.
2. Select the issue that needs to assigned to one or more team members.
3. Enter closing details in the `Write` tab.
4. Choose `Close and comment`.

### Reopen a Closed an Issue

1. In the repository, select the `Issues` tab.
2. Ensure `Closed` issues are displayed.
3. Select the issue that needs to be reopened.
4. Enter reopening details in the `Write` tab.
5. Choose `Reopen issue`.

## Discussions

### Start a discussion

1. Select the `Organization`. The organization can be selected from a repository by choosing the link before the `/` at the top of the page when viewing a repository.
2. Choose the `Teams` tab.
3. Choose the team in which to start a discussion.
4. Enter a title for the discussion at the top of the page.
5. Select `Private` from the drop down button below the `Write` tab.
6. Enter details in the `Write` tab.
7. To @ mention a team member, use the `@` symbol in the comment to bring up a list of organization members and choose a team member. **Note:** All team members in the organization are listed. Ensure that the correct team member is being @ mentioned.
8. Choose `Comment`.

### Reply to a discussion

1. Select the `Organization`. The organization can be selected from a repository by choosing the link before the `/` at the top of the page when viewing a repository.
2. Choose the `Teams` tab.
3. Choose the team in which to reply to a discussion.
4. Choose the `Reply ...` field.
5. Enter details in the `Write` tab.
6. Choose `Comment`.

See [About team discussions](https://help.github.com/articles/about-team-discussions/) for more help.