Feature: home
  In order to welcome a user to the site
  As a front end users
  I need to see a short message on the homepage that says welcome to the site

  @javascript
  Scenario: User lands on homepage
      Given I am on "/"
      Then I should see "welcome to the site"
      And I should see "you are on the homepage"

  @javascript
  Scenario: User goes from homepage to the test page
      Given I am on "/"
      When I follow "test link"
      Then I should see "This is the test page"