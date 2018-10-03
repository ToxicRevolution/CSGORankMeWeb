module.exports = {
    title: 'CSGORankMeWeb',
    description: 'Web interface for Rank Me CSGO Stat tracking plugin',
    base: '/',
    locales: {
      '/': {
        lang: 'en-US',
        title: 'CSGORankMeWeb',
        text: 'english',
        description: 'Web interface for Rank Me CSGO Stat tracking plugin',
      },
    },
    themeConfig: {
      repo: 'ToxicRevolution/CSGORankMeWeb',
      repoLabel: 'Contribute!',
      docsRepo: 'ToxicRevolution/CSGORankMeWeb',
      docsDir: 'docs',
      docsBranch: 'master',
      editLinks: true,
      editLinkText: 'Help us improve this page!',
      lastUpdated: true,
      displayAllHeaders: true,
      nav: [
        { text: "Home", link: "/"},
        { text: "About", link: "/about/"},
        { text: "Repo", link: "https://github.com/ToxicRevolution/CSGORankMeWeb"},
      ],
      sidebar: [
        {
          title: 'Installation',
          collapsable: true,
          children: [
            '/installation/requirements',
            '/installation/guide',
          ]
        },
        {
            title: 'API Documentation',
            collapsable: true,
            children: [
              '/api-endpoints/',
              '/api-endpoints/authentication',
              '/api-endpoints/panel',
              '/api-endpoints/rankme'
            ]
        },
        {
          title: 'Vac Checker',
          collapsable: true,
          children: [
            '/vacchecker/faq',
          ]
        },
        {
          title: 'Need Help?',
          collapsable: true,
          children: [
            '/help/basics',
            '/help/frequent-issues',
          ]
        }
      ]
    }
  }